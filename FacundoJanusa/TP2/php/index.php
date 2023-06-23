<?php
/* 
  suma de elementos: escribir una funcion que reciba un array numerico y calcule la suma de todos los elementos.
  
  ejemplo: array[1, 2, 3, 4,5]->15
  */

  /* 
    ordenamiento ascendente: crear funcion que ordene array numerico en orden ascendente

    escribe una funcion, que elimine los elementos duplicados de un array. Usar funcion array_unique;
  */

  $array=[20,20,20,20,5,20,20,20,20];
function sumarNumeros($array){
    $suma=0;
    foreach ($array as $array1){
    $suma+=$array1;
    }
    return $suma;
}


function ordernarNumeros($array){
    sort($array);
    foreach($array as $mostrarArray){
        echo ($mostrarArray);
    }
    return($array);
}



function mostrarNoRepetidos($array){
        $resultado=array_unique($array);
        foreach($resultado as $mostrarArray){
            echo ($mostrarArray);
        }
}

mostrarNoRepetidos($array);

?>