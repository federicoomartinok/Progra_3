<?php
class Usuario {
    private $nombre;
    private $clave;
    private $mail;

    public function __construct($nombre, $clave, $mail) {
        $this->nombre = $nombre;
        $this->clave = $clave;
        $this->mail = $mail;
    }
}