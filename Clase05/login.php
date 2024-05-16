<?php

// Archivo: Login.php 
// método:POST 
// Recibe los datos del usuario(clave,mail )por POST , 
// crear un objeto y utilizar sus métodos para poder verificar si es un usuario 
//registrado en la base de datos, 
// Retorna un : 
// “Verificado” si el usuario existe y coincide la clave también. 
// “Error en los datos” si esta mal la clave. 
// “Usuario no registrado si no coincide el mail“ 
// Hacer los métodos necesarios en la clase usuario. 

include_once "Usuario.php";

if (isset($_POST["clave"]) && isset($_POST["mail"])) {
    $clave = $_POST["clave"];
    $mail = $_POST["mail"];
    $usuario = Usuario::CrearObjeto("", "", $clave, $mail, "");
    if ($usuario->Verificar()) {
        echo "Verificado";
    } else {
        echo "Error en los datos";
    }
} else {
    echo "Faltan datos";
}



function Verificar(){
    $usuario = new Usuario("", "", $this->clave, $this->mail, "");
    if ($usuario->ExisteUsuario()) {
        if ($usuario->CoincideClave()) {
            return true;
        } else {
            return "Error en los datos";
        }
    } else {
        return "Usuario no registrado";
    }
}

