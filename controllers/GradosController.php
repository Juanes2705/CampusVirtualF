<?php

namespace Controllers;

use Model\Estudiantes;
use MVC\Router;

class GradosController {

    public static function index(Router $router){
        $router->render('admin/grados/index',[
            'titulo'=>'Grados'
        ]);
    }

    public static function crearNoveno(Router $router){
        $alertas = [];
        $estudiante = new Estudiantes;
        if(!is_admin()){
            header('Locacion: /login');
        }
        

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $estudiante-> sincronizar($_POST);

            //validar
            $alertas=$estudiante->validar();

            if(empty($alertas)) {

                $resultado = $estudiante->guardar();

                if($resultado) {
                    header('Location: /admin/grados/Noveno/noveno');
                }

            }

        }
        
        $router->render('admin/grados/Noveno/crear',[
            'titulo'=>'Añadir estudiante',
            'alertas'=>$alertas,
            'estudiante'=>$estudiante
        ]);
    }
    public static function noveno(Router $router){
        $estudiante = Estudiantes::all();
        if(!is_admin()){
            header('Locacion: /login');
        }

        $router->render('admin/grados/Noveno/noveno',[
            'titulo'=>'Noveno',
            'estudiante'=>$estudiante
            
        ]);
    }

    public static function editarNoveno(Router $router){
        if(!is_admin()){
            header('Locacion: /login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        

        if(!$id){
            header('Location: /admin/grados/Noveno/noveno');
        }

        //obtener profesor a editar
        $estudiante = Estudiantes::find($id);

        if(!$estudiante){
            header('Location: /admin/grados/Noveno/noveno');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $estudiante-> sincronizar($_POST);


            $alertas=$estudiante->validar();

            if(empty($alertas)) {

                $resultado = $estudiante->guardar();

                if($resultado) {
                    header('Location: /admin/grados/Noveno/noveno');
                }

            }
        }

        $router->render('admin/grados/Noveno/editar',[
            'titulo'=>'Editar estudiante',
            'alertas'=>$alertas,
            'estudiante'=>$estudiante
        ]);
    }
    public static function eliminarNoveno(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $estudiante = Estudiantes::find($id);

            if(isset($estudiante)){
                header('Location: /admin/grados/Noveno/noveno');
            }
            
            $resultado = $estudiante->eliminar();

            if($resultado) {
                header('Location: /admin/grados/Noveno/noveno');
            }

        }
    }

    public static function crearDecimo(Router $router){
        $alertas = [];
        $estudiante = new Estudiantes;
        if(!is_admin()){
            header('Locacion: /login');
        }
        

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $estudiante-> sincronizar($_POST);

            //validar
            $alertas=$estudiante->validar();

            if(empty($alertas)) {

                $resultado = $estudiante->guardar();

                if($resultado) {
                    header('Location: /admin/grados/Decimo/decimo');
                }

            }

        }
        
        $router->render('admin/grados/Decimo/crear',[
            'titulo'=>'Añadir estudiante',
            'alertas'=>$alertas,
            'estudiante'=>$estudiante
        ]);
    }
    public static function decimo(Router $router){
        $estudiante = Estudiantes::all();
        if(!is_admin()){
            header('Locacion: /login');
        }

        $router->render('admin/grados/Decimo/decimo',[
            'titulo'=>'Decimo',
            'estudiante'=>$estudiante
            
        ]);
    }

    public static function editarDecimo(Router $router){
        if(!is_admin()){
            header('Locacion: /login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        

        if(!$id){
            header('Location: /admin/grados/Decimo/decimo');
        }

        //obtener profesor a editar
        $estudiante = Estudiantes::find($id);

        if(!$estudiante){
            header('Location: /admin/grados/Decimo/decimo');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $estudiante-> sincronizar($_POST);


            $alertas=$estudiante->validar();

            if(empty($alertas)) {

                $resultado = $estudiante->guardar();

                if($resultado) {
                    header('Location: /admin/grados/Decimo/decimo');
                }

            }
        }

        $router->render('admin/grados/Decimo/editar',[
            'titulo'=>'Editar estudiante',
            'alertas'=>$alertas,
            'estudiante'=>$estudiante
        ]);
    }
    public static function eliminarDecimo(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $estudiante = Estudiantes::find($id);

            if(isset($estudiante)){
                header('Location: /admin/grados/Decimo/decimo');
            }
            
            $resultado = $estudiante->eliminar();

            if($resultado) {
                header('Location: /admin/grados/Decimo/decimo');
            }

        }
    }

    public static function crearOnce(Router $router){
        $alertas = [];
        $estudiante = new Estudiantes;
        if(!is_admin()){
            header('Locacion: /login');
        }
        

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $estudiante-> sincronizar($_POST);

            //validar
            $alertas=$estudiante->validar();

            if(empty($alertas)) {

                $resultado = $estudiante->guardar();

                if($resultado) {
                    header('Location: /admin/grados/Once/once');
                }

            }

        }
        
        $router->render('admin/grados/Once/crear',[
            'titulo'=>'Añadir estudiante',
            'alertas'=>$alertas,
            'estudiante'=>$estudiante
        ]);
    }
    public static function once(Router $router){
        $estudiante = Estudiantes::all();
        if(!is_admin()){
            header('Locacion: /login');
        }

        $router->render('admin/grados/Once/once',[
            'titulo'=>'Once',
            'estudiante'=>$estudiante
            
        ]);
    }

    public static function editarOnce(Router $router){
        if(!is_admin()){
            header('Locacion: /login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        

        if(!$id){
            header('Location: /admin/grados/Once/once');
        }

        //obtener profesor a editar
        $estudiante = Estudiantes::find($id);

        if(!$estudiante){
            header('Location: /admin/grados/Once/once');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $estudiante-> sincronizar($_POST);


            $alertas=$estudiante->validar();

            if(empty($alertas)) {

                $resultado = $estudiante->guardar();

                if($resultado) {
                    header('Location: /admin/grados/Once/once');
                }

            }
        }

        $router->render('admin/grados/Once/editar',[
            'titulo'=>'Editar estudiante',
            'alertas'=>$alertas,
            'estudiante'=>$estudiante
        ]);
    }
    public static function eliminarOnce(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $estudiante = Estudiantes::find($id);

            if(isset($estudiante)){
                header('Location: /admin/grados/Once/once');
            }
            
            $resultado = $estudiante->eliminar();

            if($resultado) {
                header('Location: /admin/grados/Once/once');
            }

        }
    }

}

