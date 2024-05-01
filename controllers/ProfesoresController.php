<?php

namespace Controllers;

use Model\Profesores;
use MVC\Router;

class ProfesoresController {

    public static function index(Router $router){
        if(!is_admin()){
            header('Locacion: /login');
        }
        $router->render('admin/profesores/index',[
            'titulo'=>'Profesores'
            
        ]);
    }

    public static function crearMatematicas(Router $router){
        $alertas = [];
        $profesor = new Profesores;
        if(!is_admin()){
            header('Locacion: /login');
        }
        

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);

            //validar
            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/matematica/matematicas');
                }

            }

        }
        
        $router->render('admin/profesores/matematica/crear',[
            'titulo'=>'Añadir Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function matematicas(Router $router){
        $profesor = Profesores::all();
        if(!is_admin()){
            header('Locacion: /login');
        }

        $router->render('admin/profesores/matematica/matematicas',[
            'titulo'=>'Matematicas',
            'profesor'=>$profesor
            
        ]);
    }

    public static function editarMatematicas(Router $router){
        if(!is_admin()){
            header('Locacion: /login');
        }
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        

        if(!$id){
            header('Location: /admin/profesores/matematica/matematicas');
        }

        //obtener profesor a editar
        $profesor = Profesores::find($id);

        if(!$profesor){
            header('Location: /admin/profesores/matematica/matematicas');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);


            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/matematica/matematicas');
                }

            }
        }

        $router->render('admin/profesores/matematica/editar',[
            'titulo'=>'Editar Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function eliminarMatematicas(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $profesor = Profesores::find($id);

            if(isset($profesor)){
                header('Location: /admin/profesores/matematica/matematicas');
            }
            
            $resultado = $profesor->eliminar();

            if($resultado) {
                header('Location: /admin/profesores/matematica/matematicas');
            }

        }
    }

    public static function crearSociales(Router $router){
        $alertas = [];
        $profesor = new Profesores;

        if(!is_admin()){
            header('Locacion: /login');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);

            //validar
            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/sociales/sociales');
                }

            }

        }

        $router->render('admin/profesores/sociales/crear',[
            'titulo'=>'Añadir Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function sociales(Router $router){
        $profesor = Profesores::all();

        if(!is_admin()){
            header('Locacion: /login');
        }

        $router->render('admin/profesores/sociales/sociales',[
            'titulo'=>'Sociales',
            'profesor'=>$profesor
            
        ]);
    }

    public static function editarSociales(Router $router){
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if(!is_admin()){
            header('Locacion: /login');
        }

        if(!$id){
            header('Location: /admin/profesores/sociales/sociales');
        }

        //obtener profesor a editar
        $profesor = Profesores::find($id);

        if(!$profesor){
            header('Location: /admin/profesores/sociales/sociales');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);


            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/sociales/sociales');
                }

            }
        }

        $router->render('admin/profesores/sociales/editar',[
            'titulo'=>'Editar Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function eliminarSociales(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $profesor = Profesores::find($id);

            if(isset($profesor)){
                header('Location: /admin/profesores/sociales/sociales');
            }
            
            $resultado = $profesor->eliminar();

            if($resultado) {
                header('Location: /admin/profesores/sociales/sociales');
            }

        }
    }

    public static function crearNaturales(Router $router){
        $alertas = [];
        $profesor = new Profesores;
        if(!is_admin()){
            header('Locacion: /login');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);

            //validar
            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/naturales/naturales');
                }

            }

        }

        $router->render('admin/profesores/naturales/crear',[
            'titulo'=>'Añadir Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function naturales(Router $router){
        $profesor = Profesores::all();
        if(!is_admin()){
            header('Locacion: /login');
        }
        $router->render('admin/profesores/naturales/naturales',[
            'titulo'=>'naturales',
            'profesor'=>$profesor
            
        ]);
    }

    public static function editarNaturales(Router $router){
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if(!is_admin()){
            header('Locacion: /login');
        }

        if(!$id){
            header('Location: /admin/profesores/naturales/naturales');
        }

        //obtener profesor a editar
        $profesor = Profesores::find($id);

        if(!$profesor){
            header('Location: /admin/profesores/naturales/naturales');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);


            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/naturales/naturales');
                }

            }
        }

        $router->render('admin/profesores/naturales/editar',[
            'titulo'=>'Editar Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function eliminarNaturales(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $profesor = Profesores::find($id);

            if(isset($profesor)){
                header('Location: /admin/profesores/naturales/naturales');
            }
            
            $resultado = $profesor->eliminar();

            if($resultado) {
                header('Location: /admin/profesores/naturales/naturales');
            }

        }
    }

    public static function crearEspañol(Router $router){
        $alertas = [];
        $profesor = new Profesores;
        if(!is_admin()){
            header('Locacion: /login');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);

            //validar
            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/español/español');
                }

            }

        }

        $router->render('admin/profesores/español/crear',[
            'titulo'=>'Añadir Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function español(Router $router){
        $profesor = Profesores::all();
        if(!is_admin()){
            header('Locacion: /login');
        }
        $router->render('admin/profesores/español/español',[
            'titulo'=>'Español',
            'profesor'=>$profesor
            
        ]);
    }

    public static function editarEspañol(Router $router){
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if(!is_admin()){
            header('Locacion: /login');
        }

        if(!$id){
            header('Location: /admin/profesores/español/español');
        }

        //obtener profesor a editar
        $profesor = Profesores::find($id);

        if(!$profesor){
            header('Location: /admin/profesores/español/español');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);


            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/español/español');
                }

            }
        }

        $router->render('admin/profesores/español/editar',[
            'titulo'=>'Editar Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function eliminarEspañol(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $profesor = Profesores::find($id);

            if(isset($profesor)){
                header('Location: /admin/profesores/español/español');
            }
            
            $resultado = $profesor->eliminar();

            if($resultado) {
                header('Location: /admin/profesores/español/español');
            }

        }
    }

    public static function crearIngles(Router $router){
        $alertas = [];
        $profesor = new Profesores;
        if(!is_admin()){
            header('Locacion: /login');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);

            //validar
            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/ingles/ingles');
                }

            }

        }

        $router->render('admin/profesores/ingles/crear',[
            'titulo'=>'Añadir Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function ingles(Router $router){
        $profesor = Profesores::all();
        if(!is_admin()){
            header('Locacion: /login');
        }
        $router->render('admin/profesores/ingles/ingles',[
            'titulo'=>'Ingles',
            'profesor'=>$profesor
        ]);
    }

    public static function editarIngles(Router $router){
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if(!is_admin()){
            header('Locacion: /login');
        }

        if(!$id){
            header('Location: /admin/profesores/ingles/ingles');
        }

        //obtener profesor a editar
        $profesor = Profesores::find($id);

        if(!$profesor){
            header('Location: /admin/profesores/ingles/ingles');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);


            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/ingles/ingles');
                }

            }
        }

        $router->render('admin/profesores/ingles/editar',[
            'titulo'=>'Editar Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function eliminarIngles(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $profesor = Profesores::find($id);

            if(isset($profesor)){
                header('Location: /admin/profesores/ingles/ingles');
            }
            
            $resultado = $profesor->eliminar();

            if($resultado) {
                header('Location: /admin/profesores/ingles/ingles');
            }

        }
    }

    public static function crearInformatica(Router $router){
        $alertas = [];
        $profesor = new Profesores;
        if(!is_admin()){
            header('Locacion: /login');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);

            //validar
            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/informatica/informatica');
                }

            }

        }

        $router->render('admin/profesores/informatica/crear',[
            'titulo'=>'Añadir Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function informatica(Router $router){
        $profesor = Profesores::all();
        if(!is_admin()){
            header('Locacion: /login');
        }
        $router->render('admin/profesores/informatica/informatica',[
            'titulo'=>'Informatica',
            'profesor'=>$profesor
            
        ]);
    }

    public static function editarInformatica(Router $router){
        $alertas = [];
        $id = $_GET['id'];
        $id = filter_var($id, FILTER_VALIDATE_INT);
        if(!is_admin()){
            header('Locacion: /login');
        }

        if(!$id){
            header('Location: /admin/profesores/informatica/informatica');
        }

        //obtener profesor a editar
        $profesor = Profesores::find($id);

        if(!$profesor){
            header('Location: /admin/profesores/informatica/informatica');
        }

        if($_SERVER['REQUEST_METHOD']==='POST'){
            $profesor-> sincronizar($_POST);


            $alertas=$profesor->validar();

            if(empty($alertas)) {

                $resultado = $profesor->guardar();

                if($resultado) {
                    header('Location: /admin/profesores/informatica/informatica');
                }

            }
        }

        $router->render('admin/profesores/informatica/editar',[
            'titulo'=>'Editar Profesores',
            'alertas'=>$alertas,
            'profesor'=>$profesor
        ]);
    }
    public static function eliminarInformatica(){
        if(!is_admin()){
            header('Locacion: /login');
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){

            $id = $_POST['id'];
            $profesor = Profesores::find($id);

            if(isset($profesor)){
                header('Location: /admin/profesores/informatica/informatica');
            }
            
            $resultado = $profesor->eliminar();

            if($resultado) {
                header('Location: /admin/profesores/informatica/informatica');
            }

        }
    }
        
}