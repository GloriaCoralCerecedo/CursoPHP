<?php

$edad = 16;

if($edad >= 18){
    // echo "Bienvenido";
} else{
    // echo "No eres mayor de edad";
}

$mes = 'Enero';

if($mes == 'Diciembre'){
    // echo "Feliz navidad";
} else {
    if($mes == 'Enero'){
        // echo "Feliz Año Nuevo";
    }
}

if($mes == 'Diciembre'){
     echo "Feliz navidad";
} else if ($mes == 'Enero'){
    echo "Feliz Año Nuevo";
} else if ($mes == 'Julio'){
    echo "Feliz Julio";
} else {
    echo "El mes que psusite no tiene celebración";
}

$verdadero = true;

// No se cumple si es false, tiene que tener un valor verdadero
if ($verdadero){
    echo "Verdadero";
} else{
    echo "Falso";

}

// // Anidar condicionales
// if(condicion){
//     if(condicion){

//     }
// }

?>