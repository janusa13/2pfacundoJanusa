<?php
require_once 'Banco.php';
require_once 'CuentaBancaria.php';
require_once 'Persona.php';

$persona1 = new Persona("Facundo","Janusa",24,"1234565","1");
$persona2 = new Persona ("Daian","Fernandez",25,"47568","2");

$cuenta1= new CuentaBancaria("1",$persona1,4000);
$cuenta2= new CuentaBancaria("2",$persona2,2000);

$banco = new Banco("Santander","Calle falsa 123");

$banco ->agregarCuenta($cuenta1);
$banco ->agregarCuenta($cuenta2);

$cuenta1 ->depositarSaldo(1000);
$cuenta2 ->retirarSaldo(2300);

$cuentaEncontrada = $banco->buscarCuentaPorTitular("Facundo","Janusa");
    if($cuentaEncontrada){
        echo"Cuenta encontrada: ".$cuentaEncontrada->numeroDeCuenta;
    }else{
        echo"No se ha encontrado cuenta";
    }

//$cuenta1->transferencia(500, 1, 2);

var_dump($cuenta1);
var_dump($cuenta2);


/*sistema bancario donde vamos a tener tres clases: persona, banco, cuenta bancaria.
Persona: nombre, apellido, edad, DNI.
Banco: Nombre, direccion, lista de cuentas. Metodos: constructor(nombre, direccion). Agregar cuenta:(cuenta). Buscar cuenta por titular(nombre, apellido.) return(cuenta bancaria de la persona.)
Clase CuentaBancaria: Numero de cuenta. Titular(instacia de persona). Saldo. Metodos: constructor:inicializar el numero de cuenta, titular y saldo. Metodo: depositar(cantidad). Retirar(cantidad). 

A. Crear: al menos dos instancias de la clase persona y dos o mas de la case cuenta bancaria. 

B. Realizar una instancia de la clase banco y agregar las cuentas bancarias CB a la lista del verbo

C. Realizar las siguientes operaciones: 

C.1. deposita diferentes cantidades en las cuentas bancarias. 

C.2: realiza retiros de diferentees montos de la cuenta bancaria revisando que haya saldo suficiente.

C.3.Busca una cuenta bancaria por el titular (nombre y apellido) utilizando el metodo (buscarCuentaPorTitular)

C.4. Crear una funcion "transferir" ($monto, $CuentadeOrigen,$CuentaDestino) en la clase cuenta bancaria que permita transferir un monto a otra cuenta
    ACTUALIZAR LOS SALDOS DE AMBAS CUENTAS
    
C.5. Aniade una verificacion al construct de persona para que la edad sea <0 
    si no lo es que se le otorgue por defecto 18
    
C.6. Modificar el metodo "retirar" para permitir retiro incluso si no hay saldo suficiente, pero con un limite de sobregiro.
    Definir una const que se llame limit para controlar el sobregiro
    
D    generar un trait que calcule un impuesto que es el 0,6% de la transferencia
     otra funcion que calcule otro impuesto que calcule el 2% a los retiros. 
     Cada vez que hay un retiro o transferencia al saldo aplicarle los impuestos.
     Hacer una function static que me regale 100 cuando el deposito es  <500.
        
    
    */

?>
