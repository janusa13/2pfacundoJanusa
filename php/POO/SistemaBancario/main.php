<?php

include 'Banco.php';
include 'CuentaBancaria.php';
include 'Persona.php';

//creamos instancias de personas
$persona1 = new Persona("Facundo","Janusa",24,"1234565","1");
$persona2 = new Persona ("Daian","Fernandez",25,"47568","2");

//creamos cuentas bancarias
$cuenta1= new CuentaBancaria("1",$persona1,4000);
$cuenta2= new CuentaBancaria("2",$persona2,2000);

//Creamos Banco
$banco = new Banco("Santander","Calle falsa 123");

//Agregar cuentas
$banco ->agregarCuenta($cuenta1);
$banco ->agregarCuenta($cuenta2);

//Operaciones en las cuentas
$cuenta1 ->depositarSaldo(1000);
$cuenta2 ->retirarSaldo(500);


//buscamos cuenta bancaria

$cuentaEncontrada = $banco->buscarCuentaPorTitular("Facundo","Janusa");
    if($cuentaEncontrada){
        echo"Cuenta encontrada: ".$cuentaEncontrada->numeroDeCuenta;
    }else{
        echo"No se ha encontrado cuenta";
    }

var_dump($cuenta1);
var_dump($cuenta2);


/*sistema bancario donde vamos a tener tres clases: persona, banco, cuenta bancaria.
Persona: nombre, apellido, edad, DNI.
Banco: Nombre, direccion, lista de cuentas. Metodos: constructor(nombre, direccion). Agregar cuenta:(cuenta). Buscar cuenta por titular(nombre, apellido.) return(cuenta bancaria de la persona.)
Clase CuentaBancaria: Numero de cuenta. Titular(instacia de persona). Saldo. Metodos: constructor:inicializar el numero de cuenta, titular y saldo. Metodo: depositar(cantidad). Retirar(cantidad). 

1. Crear: al menos dos instancias de la clase persona y dos o mas de la case cuenta bancaria. 
2. Realizar una instancia de la clase banco y agregar las cuentas bancarias CB a la lista del verbo
3. Realizar las siguientes operaciones: 1. deposita diferentes cantidades en las cuentas bancarias. 2: realiza retiros de diferentees montos de la cuenta bancaria revisando que haya saldo suficiente. 
4.Busca una cuenta bancaria por el titular (nombre y apellido) utilizando el metodo (buscarCuentaPorTitular) */

?>
