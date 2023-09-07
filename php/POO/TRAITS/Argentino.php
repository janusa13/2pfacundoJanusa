<?php
class Argentino extends Persona{
    public $argentino;
    use Saludar;

    function __construct($Persona){
        $this->argentino=$Persona;
    }
    public function nacionalidad(){
        return 'soy argentino';
    }
}

?>