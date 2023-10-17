<?php

// Pemiten guardar un arreglo, o varios arreglos dentro de otro.
$amigos = array(
    array('Alejandro', 20, array('asd', 'hjks'), array(852)), 
    array('Luis', 30), 
    array('Nicole', 24)
);

echo $amigos[0][0]. '</br>' .$amigos[0][2][0]. '</br>' .$amigos[0][3][0]  . '</br>';
echo $amigos[1][0] . '</br>';
echo $amigos[2][0] . '</br>';

?>