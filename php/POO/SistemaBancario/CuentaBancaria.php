<?php
class CuentaBancaria{
    public $numeroDeCuenta;
    public $titular;
    public $saldo;
    public const LIMITE=-500;
    use Impuestos;

    function __construct($numeroDeCuenta,$titular,$saldo){
        $this->numeroDeCuenta=$numeroDeCuenta;
        $this->titular=$titular;
        $this->saldo=$saldo;
    }
    
    function depositarSaldo($cantidad){
        if($cantidad>0){
        $this->saldo+=$cantidad;
        }else{
            echo('El monto debe ser superior a cero.');
        }
    }

    function retirarSaldo($cantidad){
        if ($cantidad>=self::LIMITE) {
            $this->saldo-=$cantidad;
        if($this->saldo<0){
            echo("Usted realizo un sobregiro");
        }
    }
}

     function transferencia($monto, $cuentaOrigen, $cuentaDestino){
        if($this->numeroDeCuenta ==$cuentaOrigen ){
            $this->saldo-=$monto;
            if($this->numeroDeCuenta ==$cuentaDestino){
                $this->saldo+=$monto;
                echo("transferencia exitosa");
            }
            
        }else{
            echo("error");
        }
    }
}
?>