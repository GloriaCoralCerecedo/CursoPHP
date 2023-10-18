<?php

$meses = array(
    'Enero', 'Febrero', 'Marzo', 'Abril',
    'Mayo', 'Junio', 'Julio', 'Agosto',
    'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
);

// Ciclo - Ejecutsr código por nosotros y repetirlo dpendiendo de lo que necesitemos

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
            // Por cada mes
            foreach ($meses as $mes){
            // Ejecutes algo
            echo '<li>' . $mes . '</li>';
            }
            ?>
    </ul>
</body>
</html>

