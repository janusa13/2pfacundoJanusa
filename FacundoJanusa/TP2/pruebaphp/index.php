<?php
/* 
  suma de elementos: escribir una funcion que reciba un array numerico y calcule la suma de todos los elementos.
  
  ejemplo: array[1, 2, 3, 4,5]->15
  */

  /* 
    ordenamiento ascendente: crear funcion que ordene array numerico en orden ascendente

    escribe una funcion, que elimine los elementos duplicados de un array. Usar funcion array_unique;
  */

  $array=[20,200,30,44,5,100,27,48,23];
function sumarNumeros($array){
    $suma=0;
    foreach ($array as $array1){
    $suma+=$array1;
    }
    return $suma;
} 

function ordenarNumeros($array){
    $ordenado=sort($array);
    return $ordenado;
}
ordenarNumeros($array);


?>