<?php

$nombre = $_GET['nombrePersona'];
$edad = $_GET['edad'];

echo $nombre.", tiene ".$edad." años de edad";

echo "<br>";

if($edad < 18){
    echo "mero niño";
}elseif($edad < 35){
    echo "ta bueno";
}elseif ($edad < 50) {
    echo "huele a guardado";
}else{
    echo "busque a Dios";
}