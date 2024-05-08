<?php

if (isset ($_COOKIE['nombre'])){
    echo "<p> La cookie esá creada y el valor es: </p>" . $_COOKIE['nombre'];
}
else{
    echo "<p> La cookie no está creada </p>";
    setcookie('nombre', 'Franco', time() + (60*2));
}