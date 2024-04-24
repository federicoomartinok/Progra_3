<?php
include_once "./Usuario.php";
class Empleado extends Usuario{

    private $sueldo;

    public function __construct(
        $nombre,
        $apellido,
        $dni = 0,
        $edad = 0,
        $sueldo = 0){        
        parent::__construct($nombre,$apellido,$dni,$edad);        
        $this->sueldo = $sueldo;
    }

    public function mostrar(){
        return parent::mostrar() . "Es un empleado";
    }

    public static function mostrarEstatico($empleado){

        return $empleado->mostrar() . "Sueldo: " . $empleado->sueldo;
    }

}