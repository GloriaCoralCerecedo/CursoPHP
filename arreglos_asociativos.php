<?php

//Acceder a valores, mediante cadenas que especifiquemos

$alex = array('telefono' => 9831506274, 'edad' => 25, 'apellido' => 'FalconMasters', 'pais' => 'México');
// echo $alex['telefono'] . '</br>';
// echo $alex['edad'] . '</br>';
// echo $alex['apellido'] . '</br>';
// echo $alex['pais']. '</br>';s

$alex['telefono'] = 443422234;
echo 'El télefon de Alex es ' . $alex['telefono'];
?>