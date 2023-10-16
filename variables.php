<?php

/*Todas las variables 
- empiezan con el signo de $
- deben estar en minuscuLa
- NO llevan espacios, números, la letra ñ y caracteres especiales
- Pueden tener _
*/

// No se define el tipo de dato, ejemplo: int, floar, strig. Con el valor se define

# String: Cadena de texto
$nombre = 'Gloria'; // Comillas dobles o sencillas
# Integer: Números enteros
$numero = 24;
# Double: Números con decimales
$numero_decimal = 10.5;
# Boolean: Verdadero o Falso (true / false)
$verdadero = true; 
# Array: Arreglo
# Object: Objeto
# Class: Clase
# Null: Cuando a una variabl a+un no se le ha asignado ningún valor
$edad;

/* Diferencia de comillas dobles "" y sencillas ''  
"", permiten llamar variables y traer su valor
'', solo para mostrar texto, string
*/

/* Concatenar un string con una variable
Se concatena con el .
echo 'Hola, ' . $nombre;*/

// Problemas de seguridad
//echo "Hola $nombre"; 

# Saber el tipo de dato de una variable gettype
echo gettype($nombre);


?>
