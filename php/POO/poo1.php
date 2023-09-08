<?php
class Persona{
    public $nombre;
    public $apellido;


    public function __construct($nombre, $apellido){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
    }


}

$this -> nombre='Javier';
$NuevaPersona=new Persona();

function Saludar(){
    echo 'Hola';
}

/*class alumnos extends Persona;*/

/*  require_once ´´persona.php´´; (importar clases)*/

?>

