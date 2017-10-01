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
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Helpers\Files;

/**
 * Modelo Cache
 *
 * @author Brayan Narváez <prinick@ocrend.com>
 */

class Cache {
    
    const CACHE_DIR = 'app/.youtube_cache/';

    /**
        * Obtiene el caché de un archivo
        *
        * @param string $name: Nombre del archivo
        *
        * @return null|int|bool|array con el contenido
    */
    public function get(string $name) {
        if(file_exists(self::CACHE_DIR . $name . '.json')) {
            $content = file_get_contents(self::CACHE_DIR . $name . '.json');
            $content = json_decode($content, true);

            if(array_key_exists('no_logic_array', $content)) {
                return $content['no_logic_array'];
            }

            return $content;
        }

        return null;
    }

    /**
        * Escribe un archivo de caché
        *
        * @param string $name: Nombre del archivo
        * @param mixed $element: Elemento a escribir en el caché
        *
        * @return void
    */
    public function set(string $name, $element) {
        Files::delete_file(self::CACHE_DIR . $name . '.json');

        # Si no es un arreglo, es un entero o un boolean
        if(!is_array($element)) {
            $element = array(
                'no_logic_array' => $element
            );
        }

        Files::write_file(self::CACHE_DIR . $name . '.json', json_encode($element));
    }

    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        global $config;

        if($config['framework']['debug']) {
            $cache = array();
            foreach(Files::get_files_in_dir(self::CACHE_DIR) as $file) {
                $cache[] = "CACHE FILE: " . $file;
            }
            dump($cache);
        }
    }
}