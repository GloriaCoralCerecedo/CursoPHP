<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// Devuelve el número de valores que tenemos en un arreglo
// echo count($meses);

// Último  mes
//$ultimo_mes = count($meses); //Error: Warning: Undefined array key 12

$ultimo_mes = count($meses) - 1; 
echo $meses[$ultimo_mes];

?>