<?php

// Variables que permiten almacenar multiples valores
//Arreglo Indexado

$semana = array('Lunes', 'Martes', 'Miércoles', 'Jueves', 'Vierne', 'Sabado', 'Domingo');
// $semana[7] = 'FalconMasters';
// echo $semana[7];
$arreglo = ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Vierne', 'Sabado', 'Domingo'];

$arreglo2 = array('Cadenas de texto', 1, array('asd', 123), true);

// Ver día de la semana y concatenar la etiqueta de html br para hacer un salto de línea
echo $semana[0] . '</br>';
echo $semana[1] . '</br>';
echo $semana[2] . '</br>';
echo $semana[3] . '</br>';
echo $semana[4] . '</br>';
echo $semana[5] . '</br>';
echo $semana[6] . '</br>';
?>