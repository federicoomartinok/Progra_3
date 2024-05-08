<?php
$carpeta_archivos = "subida/";

$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamano_archivo = $_FILES['archivo']['size'];


$ruta_destino = $carpeta_archivos . $nombre_archivo;


if(!((strpos($tipo_archivo, "jpeg") || strpos($tipo_archivo, "jpg")) && ($tamano_archivo < 1000000))) {
    echo "Error, el archivo no es un JPG o es muy grande";
} else {
    if(move_uploaded_file($_FILES['archivo']['tmp_name'], $ruta_destino)) {
        echo "El archivo ha sido subido correctamente";
    } else {
        echo "Ocurrió un error al subir el archivo";
    }
}