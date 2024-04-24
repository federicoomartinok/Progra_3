<?php

class Usuario{

    //Atributos
    protected $nombre;
    protected $apellido;
    private $dni;
    public $edad;

    //Constructor
    public function __construct($nombre,$apellido,$dni = 0,$edad = 0){

        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->edad = $edad;

    }

    //Metodos

    public function mostrar(){
        return "Nombre: ". $this->nombre . " Apellido: " . $this->apellido;
    }

    public function actualizarDni($dni){
        $this->dni = $dni;
    }

}