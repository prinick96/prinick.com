<?php

/*
 * This file is part of the Ocrend Framewok 2 package.
 *
 * (c) Ocrend Software <info@ocrend.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
*/

namespace app\controllers;

use app\models as Model;
use Ocrend\Kernel\Router\IRouter;
use Ocrend\Kernel\Controllers\Controllers;
use Ocrend\Kernel\Controllers\IControllers;

/**
 * Controlador ver/
 *
 * @author Brayan Narváez <prinick@ocrend.com>
*/
  
class verController extends Controllers implements IControllers {

    public function __construct(IRouter $router) {
        parent::__construct($router); 

        # Conectar con youtube
        $yb = new Model\Youtube;
        
        # Obtener id del vídeo
        $id_video = $router->getId();

		echo $this->template->render('ver/ver',array(
            'v' => $yb->getVideo($id_video)
        ));

    }

}