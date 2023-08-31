<?php
class Banco{
    public $nombre;
    public $direccion;
    public $listaDeCuentas =array();

    function __construct($nombre,$direccion){
    $this->nombre=$nombre;
    $this->direccion=$direccion;
    }

  function agregarCuenta($cuenta) {
        $this->listaDeCuentas[] = $cuenta;
    }

    function buscarCuentaPorTitular($nombre, $apellido) {
    foreach ($this->listaDeCuentas as $cuenta) {
        if ($cuenta->titular != null && $cuenta->titular->nombre == $nombre && $cuenta->titular->apellido == $apellido) {
            return $cuenta;
        }
    }
    return null;
    }

}


?>