<?php
require_once("conexion.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre=$_POST["nombre"];
    $apellido=$_POST["apellido"];
    $club=$_POST["club"];
    $edad=$_POST["edad"];
    if($nombre && $apellido && $club && $edad != NULL ){
        $query='update jugadoras set nombre=:nombre, apellido=:apellido, club=:club, edad=:edad
        where id=:id';
        $stmt=$connect->prepare($query);
        $stmt->bindParam(":nombre",$nombre);
        $stmt->bindParam(":apellido",$apellido);
        $stmt->bindParam(":club",$club);
        $stmt->bindParam(":edad",$edad);
        $stmt->execute();

    }else{
        print("DATOS VACIOS");
    }
}else{
    print("METODO NO VALIDO");
}

//$queryUpd='update jugadoras set nombre=:nombre, apellido=:apellido, club=:club, edad=:edad where id=:id';
?>