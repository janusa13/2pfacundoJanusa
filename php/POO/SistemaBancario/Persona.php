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
    if($edad<0){
        $this->edad=18;
    }else{
        $this->edad=$edad;
    };
    $this->dni=$dni;
    $this->numeroDeCuenta=$numeroDeCuenta;
    }

}

?>