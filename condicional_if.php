<?php

// Nos permiten tomar decisiones en base a condiciones que nosotros establecemos 
// if(condicion){
//     //Instrucciones
// }

/* Operadores de comparación:

== igualdad
< menor que 
> mayo que
<=  menor o igual que 
>= mayor o igual que 
!= diferente
! negación if (!edad) - Si no hay ninguna edad establecida se ejecutan las instrucciones

*/

/* Operadores lógicos:

&& - Evalua que se cumplan las dos condiciones
||, OR - Evalua que se cumpla al menos una condición
XOR - Evalua que se cumpla una y solo una condición

*/

$edad = 18;
$nombre = 'Luigi';

if ($edad >= 18 && $nombre == 'Luigi'){
    echo '<h1> Bienvenido </h1>';
}

if ($edad < 18 or $nombre != 'Luigi'){
    echo '<h1> Eres menor de edad y/o no te llamas Luigi</h1>';
}

?>
