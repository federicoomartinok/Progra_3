<?php


session_start();

if(isset($_SESSION["usuario"])) {
    echo $_SESSION["usuario"];
} else {
    echo $_SESSION["usuario"] = "Franco";
    echo "No estás logueado, lo seteamos";
}