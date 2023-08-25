<?php
class CuentaBancaria{
    public $numeroDeCuenta
    public $titular
    public $saldo

    function __constructor($numeroDeCuenta,$titular,$saldo){
        $this->numeroDeCuenta=$numeroDeCuenta;
        $this->titular=$titular;
        $this->saldo=$saldo;
    }
    
    function depositarSaldo($cantidad){
        if($cantidad>0){
        $this->$saldo+=$cantidad;
        }else{
            echo('El monto debe ser superior a cero.')
        }
    }

    function retirarSaldo($cantidad){
        if ($this->$saldo>=$cantidad) {
            $this->$saldo-=$cantidad;
        }else{
            echo('Saldo insuficiente.')
        }
    }

}





?>