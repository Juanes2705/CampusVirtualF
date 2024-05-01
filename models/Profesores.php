<?php

namespace Model;

class Profesores extends ActiveRecord{
    protected static $tabla = 'profesores';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'correo', 'contraseña', 'tags'];


    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->correo = $args['correo'] ?? '';
        $this->contraseña = $args['contraseña'] ?? '';
        $this->tags = $args['tags'] ?? '';
        
    }

    public function validar() {
        if (!$this->nombre) {
            self::$alertas['error'][] = 'El Nombre es Obligatorio';
        }
        if(!$this->apellido) {
            self::$alertas['error'][] = 'El Apellido es Obligatorio';
        }
        if(!$this->correo) {
            self::$alertas['error'][] = 'El Campo Correo es Obligatorio';
        }
        if(!$this->contraseña) {
            self::$alertas['error'][] = 'El Campo Contraseña es Obligatorio';
        }
        if(!$this->tags) {
            self::$alertas['error'][] = 'El Campo áreas es obligatorio';
        }
    
        return self::$alertas;
    }

}