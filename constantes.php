<?php 

/*Nos permite establecer el valor para utilizarlo cuando queramos, 
con la condición de que no podemos volver a cambiar el valor.
Son variables globales.
Se acceden desde cualquer parte del código (scope).
Pueden estar en mayúsculas o minúsculas, pero para diferenciar se recomienda en mayúsculas.
No llevan comillas*/

// $nombre = "Gloria";
// $nombre = "Luigui";
// echo $nombre;

// Nombre de la constante, valor
define('PI', 3.14);
// define('PI', 000); error: Warning: Constant PI already defined...
define('NOMBRE', 'Gloria');
echo NOMBRE

?>