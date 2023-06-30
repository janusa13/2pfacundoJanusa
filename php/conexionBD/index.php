<?php

require_once('conexion.php');

$query='select * from users';
$stmt=$connect -> prepare($query);
$stmt->execute();
$usuarios=$stmt->fetchAll();

$edad1=0;
$edad2=0;
foreach ($usuarios as $element){
    print('ID: ');
    print($element['id']);
    print(' ');
    print('Nombre: ');
    print($element['nombre']);
    print(' ');
    print('Apellido: ');
    print($element['apellido']);
    print(' ');
    print('Edad: ');
    print($element['edad']);
    print('|      |');
    $edad1+=$element['edad'];
    print('  ');
    }

$query='select* from jugadoras';
$stmt=$connect->prepare($query);
$stmt->execute();
$jugadoras=$stmt->fetchAll();

foreach($jugadoras as $element ){
    print('ID: ');
    print($element['ID']);
    print(' Nombre: ');
    print($element['nombre']);
    print(' Apellido: ');
    print($element['apellido']);
    print(' Edad: ');
    print($element['edad']);
    print(' Club: ');
    print($element['club']);
    print('|----|');
    $edad2+=$element['edad'];
}
    print('La ta');
if($edad1>$edad2){
    print('La tabla users tiene mayor total de edad: ');
    print($edad1);
}else{
    print('La tabla jugadoras tiene mayor total de edad: ');
    print($edad2);
}


/* AGREGAR EDAD QUE VA A SER UN INTEGER, CALCULAR QUE TABLA TIENE MAYOR EDAD TOTAL. MOSTRAR LAS DOS TABLAS*/

/*hacer lista de jugadoras con un boton  para editar los datos de jugadora. hacer <a href='updatejugadoras.php'?id*/
?>