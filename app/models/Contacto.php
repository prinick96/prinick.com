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
use Ocrend\Kernel\Helpers\Emails;
use Ocrend\Kernel\Helpers\Strings;

/**
 * Modelo Contacto
 *
 * @author Brayan Narváez <prinick@ocrend.com>
 */

class Contacto extends Models implements IModels {
    
    /**
      * Cantidad máxima de mensajes seguidos antes del timer
      *
      *  @var int
    */
    const MAX_COUNTS = 3;

    /**
      * Un minuto máximo entre cada MAX_COUNT mensajes
      *
      * @var int
    */
    const TIMER = 60;

    /**
      * Devuelve un arreglo para la api
      *
      * @return array
    */
    final public function contactar() : array {
      try {
        global $http;

        # Obtener datos $_POST
        $nombre = $http->request->get('name');
        $email = $http->request->get('email');
        $telefono = $http->request->get('phone');
        $mensaje = $http->request->get('message');

        # Campos llenos
        if($this->functions->e($nombre,$email,$telefono,$mensaje)) {
          throw new ModelsException('Todos los campos son necesarios.');
        }

        # Verificar email
        if(!Strings::is_email($email)) {
          throw new ModelsException('El formato del email no es correcto.');
        }

        # Tamaño del mensaje
        if(strlen($mensaje) < 15) {
          throw new ModelsException('El mensaje debe contener al menos 15 caracteres.');
        }

        # Cantidad de mensajes seguidos
        if($this->countMessages()) {
          $HTML = Emails::plantilla(
            '<ul>
              <li><b>Nombre:</b> '. strip_tags($nombre) .'</li>
              <li><b>Email:</b> '. $email .'</li>
              <li><b>Teléfono:</b> '. strip_tags($telefono) .'</li>
              <li><b>IP:</b> '. $http->server->get("REMOTE_ADDR") .'</li>
              <li>'. nl2br(strip_tags($mensaje)) .'</li>
            </ul>'
          );

          # Mandar el email
          Emails::send_mail(array(
            'prinick@ocrend.com' => 'Prinick Narváez'
          ),$HTML,'Contacto Prinick.com');
        } else {
          throw new ModelsException('Ha excedido el máximo de ' . self::MAX_COUNTS . ' mensaje seguidos, debe esperar ' . self::TIMER . ' segundos.');
        }

        return array('success' => 1, 'message' => 'Gracias por ponerte en contacto.');
      } catch(ModelsException $e) {
        return array('success' => 0, 'message' => $e->getMessage());
      }      
    }

    /**
      * Contador de mensajes, define cuando puede seguir enviando o no un mensaje
      *
      * @return bool 
    */
    private function countMessages() : bool {
      global $session;

      # Verificar contador
      if(null === $session->get('message_counter')) {
        $session->set('message_counter', 0);
      }

      # Obtener conteo actual
      $counter = $session->get('message_counter') + 1;

      # Asignar contador
      $session->set('message_counter', $counter);

      # Verificar si ya se pasó de la cantidad máxima
      if($counter >= self::MAX_COUNTS) {
        # Verificar tiempo
        $timer = $session->get('message_timer');

        # Asignar tiempo desde esta petición
        if(null === $timer) {
          $session->set('message_timer', time() + self::TIMER);
        }

        if($timer <= time()) {
          # Reiniciar contador y tiempo
          $session->set('message_counter', 0);
          $session->remove('message_timer');
          
          return true;
        }
        
        return false;
      }

      return true;
    }

    /**
      * __construct()
    */
    public function __construct(IRouter $router = null) {
        parent::__construct($router);
        
    }

    /**
      * __destruct()
    */ 
    public function __destruct() {
        parent::__destruct();
        
    }
}