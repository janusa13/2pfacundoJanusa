<?php
require_once 'Persona.php';
class Alumno extends Persona{
    public function saludarAlumno(){
        return 'Hola alumno: '. parent::$nombre;
    }
}


?>