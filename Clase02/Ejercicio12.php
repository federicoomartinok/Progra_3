<?php
// Aplicación No 12 (Invertir palabra)
// Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
// de las letras del Array.
//$array = array("H", "O", "L", "A");
// Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

$array = array("H", "O", "L", "A");

function invertirPalabra($array){
    return implode("",array_reverse($array));
}

echo invertirPalabra($array);
