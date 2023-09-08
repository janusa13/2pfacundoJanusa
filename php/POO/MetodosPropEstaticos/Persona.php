<?php

class Persona{
    public static $nombre='aaa';
    public static function saludar(){
        return 'hola';
    }

    public  function saludarPorNombre(){
        return 'Hola tu nombre es:'. self::$nombre;
    }
}

?>