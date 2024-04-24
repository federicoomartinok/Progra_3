<?php
include "./Usuario.php";
include "./Empleado.php";

$empleado = new Empleado("Federico","Perez",123456,30,1000);
$usuario = new Usuario("Juan","Perez",123456,30);

$mostrarUsuario = $usuario->mostrar();

echo $mostrarUsuario;

echo "<br/><br/>";

$mostrarEmpleado = $empleado->mostrar();

echo $mostrarEmpleado;

echo "<br/><br/>";

echo Empleado::mostrarEstatico($empleado);

echo "<br/><br/>";



