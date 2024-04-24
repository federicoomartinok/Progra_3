<?php
//Martin Federico
// Aplicación No 5 (Números en letras)
// Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
// por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
// entre el 20 y el 60.
// Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

$num = 99;

if ($num >=20 && $num <= 60){
    $decena = floor($num / 10);//redondea la divicion al entero mas cercano
    $unidad = $num % 10;

    switch ($decena) {
        case 2:
            $decena = "veinte";
            break;
        case 3:
            $decena = "treinta";
            break;
        case 4:
            $decena = "cuarenta";
            break;
        case 5:
            $decena = "cincuenta";
            break;
        case 6:
            $decena = "sesenta";
            break;
    }

    switch ($unidad) {
        case 1:
            $unidad = "uno";
            break;
        case 2:
            $unidad = "dos";
            break;
        case 3:
            $unidad = "tres";
            break;
        case 4:
            $unidad = "cuatro";
            break;
        case 5:
            $unidad = "cinco";
            break;
        case 6:
            $unidad = "seis";
            break;
        case 7:
            $unidad = "siete";
            break;
        case 8:
            $unidad = "ocho";
            break;
        case 9:
            $unidad = "nueve";
            break;
    }

    echo $decena . " y " . $unidad;
} else {
    echo "El número no está entre 20 y 60";

}


