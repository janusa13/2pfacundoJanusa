<?php
require_once 'CuentaBancaria.php';
    class Tarjeta extends CuentaBancaria{
        public const LIMITECREDITO=5000;
        public $saldoPendiente;
        public const TASAINTERES=0.18;

        function __construct( $limiteDeCredito, $tasaDeInteres){
        parent::__construct($numeroDeCuenta, $titular, $saldo);
        $this->limiteDeCredito=$limiteDeCredito;
        $this->saldoPendiente=$saldoPendiente;  
        }

    function calcularInteres($tasaDeInteres,$saldoPendiente){
        $interes = $saldoPendiente * $this->tasaDeInteres;
        $saldoConIntereses = $saldoPendiente + $interes;
        echo ("Su saldo deudor con intereses es de: $saldoConIntereses");
    }

    function realizarPago($precio,$saldoPendiente){
        if($saldoPendiente<self::LIMITECREDITO){
            $saldoPendiente+=$precio;
        }
    }
    }


?>