<?php
// Aplicación No 1 (Sumar números)
// Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
// supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
// se sumaron.

$suma = 0;
$contador = 0;
while ($suma <= 1000) {    
    if ($suma + $contador > 1000) {
        break;
    }
    
    $contador++;
    $suma += $contador;

    echo $suma . " ";
}

echo "Se sumaron " . $contador . " números." . "y la suma es: " . $suma;