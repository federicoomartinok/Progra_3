<?php
//Federico Martin
// Aplicación No 2 (Mostrar fecha y estación)
// Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
// distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
// año es. Utilizar una estructura selectiva múltiple.

$fecha = date("d/m/Y");

echo "Fecha: " . $fecha;

if (date("m") >= 12 || date("m") <= 2) {
    echo " Estamos en verano";
} elseif (date("m") >= 3 && date("m") <= 5) {
    echo " Estamos en otoño";
} elseif (date("m") >= 6 && date("m") <= 8) {
    echo " Estamos en invierno";
} else {
    echo " Estamos en primavera";
}