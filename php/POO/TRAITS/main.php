<?php
require_once 'Persona.php';
require_once 'Argentino.php';
require_once 'Saludar_trait.php';

$primero=new Persona('AAA','BBB');

$primero->Saludar();

$primero->getNombre();

var_dump($primero);










/* TRAITS   
    son clases que utilizamos para herencias multiples. 
    generas una clase TRAITS con nombre.
    funciona como una clase con metodos.
    usas la palabra USE, nombre del metodo al que quieras acceder.
    NO SON INSTANCIABLES.
    se puede usar mas de un traits por clase.
    se declaran en un archivo distinto, se nombran como un objeto con guion bajo trait. 
        nombre_trait.php



    public: se llama de cualquier clase.
    private: se llama solo desde esa clase.
    protected: 
    
    
    EJERCICIOS:
        clase persona (nombre, apellido) un construct y una funcion para obtener el nombre ( public function getNombre() return this->nombre) 
        clase de tipo trait (trait Saludar() metodo: public saludar() return ''hola'')
        clase argentino extends persona y utilice el trait de Saludar (use Saludar;)
        una funcion a argentino que sea nacionalidad y que return soy argentino.
    */
?>