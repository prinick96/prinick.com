<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace app\models;

use app\models as Model;
use Ocrend\Kernel\Models\Models;
use Ocrend\Kernel\Models\IModels;
use Ocrend\Kernel\Models\ModelsException;
use Ocrend\Kernel\Models\Traits\DBModel;
use Ocrend\Kernel\Router\IRouter;

/**
 * Modelo Youtube
 *
 * @author Brayan Narváez <prinick@ocrend.com>
 */

class Youtube extends Models implements IModels {

    /**
        * Delay entre cada petición total para no volver a solicitarla.
        * Tiempo en segundos.
        *
        * @var int
    */
    const DELAY = 3600;

    /**
        * Listas de reproducción de youtube
        *
        * @var array
    */
    const LISTAS = array(
        'PLDQZoQpLCoUAlWmnF8-b4KUT3-lzXAn4i', # Ocrend Framework 2
        'PLDQZoQpLCoUDvafL7aERl1Mt4Xd_PPulK', # Curso de TWIG - Ocrend Framewok
        'PLDQZoQpLCoUC202PnlREWNtC-6mNTwdbh', # Curso de PHP POO & MySQL - Programación Web
        'PLDQZoQpLCoUDEAAOVwMoHc4DKZ6P14xfC', # Curso de PHP Avanzado - PHP POO + MySQL + MVC + AJAX
        'PLDQZoQpLCoUAq7z7wZbbbST7hZtLRaf8_', # C Intensivo - Algoritmos II - De Pascal a C - UCAB
        'PLDQZoQpLCoUCTF4OVK-cR8nxEq3y83gyt', # Curso de HTML5 - Diseño web
        'PLDQZoQpLCoUAwaQrxjcFB7IrOtrVNs23w', # Curso de Diseño Gráfico con Adobe Photoshop CS6 Y CC
        'PLDQZoQpLCoUBljNQEl2JrnReB93ko8u_V'  # CryEngine 3 SDK - Curso de diseño de niveles
    );

    /**
        * Cliente de Google
        *
        * @var \Google_Client
    */
    private $client;
    
    /**
        * Servicio de YouTube
        *
        * @var \Google_Service_YouTube
    */
    private $youtube;

    /**
        * Caché de youtube
        *
        * @var Cache
    */
    private $cache;

    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        global $config;

        # Autenticación con la api de google
        $this->client = new \Google_Client();
        $this->client->setApplicationName($config['youtube']['name']);
        $this->client->setDeveloperKey($config['youtube']['api']);
        $this->youtube = new \Google_Service_YouTube($this->client);

        # Caché
        $this->cache = new Cache;
    }

    /**
        * Devuelve los videos de una lista de reproducción, la cantidad está delimitada por un parámetro.
        *
        * @param string $id_list : Id de la lista de reproducción
        * @param int $max : Cantidad máxima a traer, por defecto 4
        *
        * @return bool|array con los vídeos
    */
    public function getVideosFromList(string $id_list, int $max = 4) {
        # Verificar delay
        $delay = $this->cache->get($id_list . '_max_' . $max . '_delay');
        if($delay === null || $delay <= time()) {
            # Definir nuevo delay
            $this->cache->set($id_list . '_max_' . $max . '_delay', time() + self::DELAY);
            
            # Obtener los vídeos de las lista
            $videos_lista = $this->youtube->playlistItems->listPlaylistItems('snippet',array(
                'playlistId' => $id_list,
                'maxResults' => $max
            ));

            # Recuperar arreglo de vídeos
            if(is_array($videos_lista['items']) && sizeof($videos_lista['items']) > 0) {
                # Preparar el recurso
                $videos = array();

                # Dar forma al recurso
                foreach($videos_lista['items'] as $video) {
                    $v = $video['snippet'];
                    # Datos necesarios de los vídeos
                    $videos[] = array(
                        'title' => $v['title'],
                        'thumb' => $v['thumbnails']['high']['url'],
                        'desc' => $v['description'],
                        'url' => $v['resourceId']['videoId']
                    );
                }
            } else {
                $videos = false;
            }
            
            # Guardar en caché los vídeos
            $this->cache->set($id_list . '_max_' . $max . '_last_videos', $videos);

            return $videos;
        }        

        return $this->cache->get($id_list . '_max_' . $max . '_last_videos');
    }

    /**
        * Devuelve todas las listas de reproducción configuradas con sus vídeos, máximo 4.
        *
        * @return bool|array con las listas de reproducción
    */
    public function getListas() {
        $delay = $this->cache->get('lists_delay');

        if($delay === null || $delay <= time()) {
            # Definir nuevo delay
            $this->cache->set('lists_delay', time() + self::DELAY);

            # Obtener las listas
            $listas = $this->youtube->playlists->listPlaylists('snippet',array(
                'id' => implode(',',self::LISTAS)
            ));

            # Verificar si hay resultados
            if(array_key_exists('items',$listas)) {
                # Preparar el resultado
                $result = array();

                # Recorrer las listas y obtener los vídeos por cada lista
                foreach($listas['items'] as $id_lista => $lista) {
                    $result[] = array(
                        'title' => $lista['snippet']['title'],
                        'id_lista' => self::LISTAS[$id_lista],
                        'videos' => $this->getVideosFromList(self::LISTAS[$id_lista])
                    );
                }
            } else {
                $result = false;
            }

            # Guardar en caché las listas
            $this->cache->set('last_list_videos', $result);
            
            return $result;
        }

        return $this->cache->get('last_list_videos');
    }

    /**
        * Obtiene un vídeo solicitado según su ID
        *
        * @return bool|array 
    */
    public function getVideo(string $id_video) {
        # Verificar delay
        $delay = $this->cache->get($id_video . '_video_delay');
        if($delay === null || $delay <= time()) {
            # Definir nuevo delay
            $this->cache->set($id_video . '_video_delay', time() + self::DELAY);
                        
            # Obtener los vídeos de las lista
            $videos = $this->youtube->videos->listvideos('snippet',array(
                'id' => $id_video
            ));

            # Verificar existencia del vídeo
            if(is_array($videos['items']) && sizeof($videos['items']) > 0) {
                $v = $videos['items'][0]['snippet'];
                # Datos necesarios de los vídeos
                $video = array(
                    'title' => $v['title'],
                    'thumb' => $v['thumbnails']['maxres']['url'],
                    'desc' => $v['description'],
                    'url' => $id_video
                );
            } else {
                $video = false;
            }
            
            # Guardar en caché los vídeos
            $this->cache->set($id_video . '_video_item', $video);

            return $video;
        }
        
        return $this->cache->get($id_video . '_video_item');
    }

    /**
        * Obtiene información de una lista de reproducción
        *
        * @param string $id_list : Id de la lista de reproducción
        *
        * @return bool|array 
    */
    public function getInfoList(string $id_list) {
        # Verificar delay
        $delay = $this->cache->get($id_list . '_list_unique_delay');
        if($delay === null || $delay <= time()) {
            # Definir nuevo delay
            $this->cache->set($id_list . '_list_unique_delay', time() + self::DELAY);

            # Obtener lista
            $lista_rep = $this->youtube->playlists->listPlaylists('snippet',array(
                'id' => $id_list
            ));

            # Verificar lista
            if(is_array($lista_rep['items']) && sizeof($lista_rep['items']) > 0) {
                # Añadir información de la lista
                $lista = array(
                    'title' => $lista_rep['items'][0]['snippet']['title'],
                    'desc' => $lista_rep['items'][0]['snippet']['description']
                );
            } else {
                $lista = false;
            }

            $this->cache->set($id_list . '_list_unique', $lista);

            return $lista;
        }

        return $this->cache->get($id_list . '_list_unique');
    }

    /**
      * __destruct()
    */ 
    public function __destruct() {
        parent::__destruct();
        
    }
}