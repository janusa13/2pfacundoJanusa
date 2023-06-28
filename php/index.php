<?php

/* suma de elementos: escribir una funcion que reciba un array numerico y calcule la suma de todos los elementos.
  ejemplo: array[1, 2, 3, 4,5]->15*/
  $array=[20,20,20,5,5,5,5,5,20];
function sumarNumeros($array){
    $suma=0;
    foreach ($array as $array1){
    $suma+=$array1;
    }
    return $suma;
}


/*ordenamiento ascendente: crear funcion que ordene array numerico en orden ascendente*/
function ordernarNumeros($array){
    sort($array);
    foreach($array as $mostrarArray){
        echo ($mostrarArray);
    }
    return($array);
}


/*escribe una funcion, que elimine los elementos duplicados de un array. Usar funcion array_unique;*/
function mostrarNoRepetidos($array){
        $resultado=array_unique($array);
        foreach($resultado as $mostrarArray){
            echo ($mostrarArray);
            echo(" ");
        }
}
mostrarNoRepetidos($array);

/*Busqueda de elementos: Crear una funcion que revise un array y un valor a buscar.
 Devolver un array con los incides de todas las ocurrencias del valor en el array original. Usar Arra_keys() */
$valor=20;
function buscar($array, $valor){
  $indices=array_keys($array, $valor);
  return $indices;
}
$mostrarIndices =buscar($array,$valor);
print_r($mostrarIndices);

/*Escribe una funcion que combine dos array en uno solo. Buscar en el array resultante los numeros impares. [1,5,9,4], [2,5,6,7]. Usar array_merge. */

$arrayA=[1,5,9,4];
$arrayB=[2,5,6,7];

function arrayCombinados($arrayA,$arrayB){
  $combinacion=array_merge($arrayA,$arrayB);
  foreach($combinacion as $impares){
    if($impares%2 != 0){
      $arrayImpar[]=$impares;
    }
  }
  return $arrayImpar;
}
$mostrarImpar=arrayCombinados($arrayA,$arrayB);
print_r($mostrarImpar);

//Buscar si X jugador juega en San Lorenzo. Buscar en que equipo juega X jugador.

$clubes = array(
    'San Lorenzo' => array(
        'Jugadores' => array(
            'Nahuel Barrios',
            'Adam Bareirio',
            'Agusto Batalla'
        )
    ),
    'Independiente' => array(
        'Jugadores' =>  array(
            'Rey',
            'Marcone',
            'Carteruche'
        )
    )
);
$jugador='Adam Bareirio';

function confirmar_jugador($clubes,$jugador){
  $jugadores=$clubes['San Lorenzo']['Jugadores'];
  $flag=False;
  foreach ($jugadores as $element){
    if($element===$jugador){
    $flag=True;
    }
  }
  if($flag==True){
    echo("Si juega");
  }else{
    echo("No juega");
  }
}
//confirmar_jugador($clubes,$jugador);
function jugador_club($clubes,$jugador){
  foreach ($clubes as $element){
    if($jugador===$element['San Lorenzo']['Jugadores']){
      $club='San Lorenzo';
      echo$club;
    }elseif($jugador===$element['Independiente']['Jugadores']){
      $club='Independiente';
      echo$club;
    }
  }
  
}
jugador_club($clubes,$jugador);
?>