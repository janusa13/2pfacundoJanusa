<?php

trait Impuestos{
    public function impuestoTransferencia($cuentaOrigen, $monto){
        $impuesto=$this->monto*0.6;
        $cuentaOrigen->saldo-=$impuesto;
    }

    public function impuestoRetirar($cantidad){
        $impuesto=$cantidad*0.2;
        $this->saldo-=$impuesto;
    }
}

?>