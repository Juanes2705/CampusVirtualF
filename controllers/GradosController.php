<?php

namespace Controllers;


use MVC\Router;

class GradosController {

    public static function index(Router $router){
        $router->render('admin/grados/index',[
            'titulo'=>'Grados'
        ]);
    }

}

