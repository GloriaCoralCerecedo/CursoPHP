<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

$numeros = array(1, 22, 23, 10, 9, 5, 70, 100, 20);

// Ordenar arreglos de forma descendente y ascendente, con números. Con cadenas seria alfabéticamente

// sort($meses); // Ordena alfabéticamente
// rsort($meses) // Se ordena alrevez
// sort($numeros) // Ordena ascendentemente
rsort($numeros) // Se ordena descendentemente
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Meses del año</title>
</head>
<body>
    <h1>Meses del año</h1>
    <ul>
            <?php
            // // Por cada mes
            // foreach ($meses as $mes){
            // // Ejecutes algo
            // echo '<li>' . $mes . '</li>';

             // Por cada mes
             foreach ($numeros as $num){
                // Ejecutes algo
                echo '<li>' . $num . '</li>';
            }
            ?>
    </ul>
</body>
</html>

