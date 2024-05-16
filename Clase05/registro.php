<?php
<!-- Archivo: registro.php 
método:POST 
Recibe los datos del usuario( nombre,apellido, clave,mail,localidad )por POST , crear un objeto con la fecha de registro y utilizar sus métodos para poder hacer el alta, guardando los datos la base de datos 
retorna si se pudo agregar o no.  -->


include_once "Usuario.php";

<-- Creo el objeto usuario y lo registro -->

if (isset($_POST["nombre"]) && isset($_POST["apellido"]) && isset($_POST["clave"]) && isset($_POST["mail"]) && isset($_POST["localidad"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $clave = $_POST["clave"];
    $mail = $_POST["mail"];
    $localidad = $_POST["localidad"];
    $usuario = Usuario::CrearObjeto($nombre, $apellido, $clave, $mail, $localidad);
    if ($usuario->Alta()) {
        echo "Se pudo agregar";
    } else {
        echo "No se pudo agregar";
    }
} else {
    echo "Faltan datos";
}





