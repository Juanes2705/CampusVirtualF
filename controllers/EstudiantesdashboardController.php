<?php

namespace Controllers;


use MVC\Router;

class EstudiantesdashboardController {

    public static function index(Router $router){
        $router->render('estudiante/dashboard/index',[
            'titulo'=>'Panel estudiante'
        ]);
    }

}