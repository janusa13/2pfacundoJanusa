<?php
class Persona{
    public $nombre;
    public $apellido;
    public $edad;
    public $dni;
    public $numeroDeCuenta;

    function __construct($nombre, $apellido,$edad,$dni, $numeroDeCuenta){
    $this->nombre=$nombre;
    $this->apellido=$apellido;
    $this->edad=$edad;
    $this->dni=$dni;
    $this->numeroDeCuenta=$numeroDeCuenta;
    }

}

?>