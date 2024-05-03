<?php
// Crear la clase Garage que posea como atributos privados:

// _razonSocial (String)
// _precioPorHora (Double)
// _autos (Autos[], reutilizar la clase Auto del ejercicio anterior)
// Realizar un constructor capaz de poder instanciar objetos pasándole como

// parámetros: i. La razón social.
// ii. La razón social, y el precio por hora.

// Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
// que mostrará todos los atributos del objeto.
// Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
// objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
// Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
// (sólo si el auto no está en el garaje, de lo contrario informarlo).
// Ejemplo: $miGarage->Add($autoUno);
// Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
// “Garage” (sólo si el auto está en el garaje, de lo contrario informarlo). Ejemplo:
// $miGarage->Remove($autoUno);
// En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos
// los métodos.
//en el remove acordate de usar el $this->autos = array_values($this->_autos) despues del unset
include_once "Auto.php";

class Garage{

    private $_razonSocial;
    private $_precioPorHora;
    private $_autos;

    public function __construct($_razonSocial, $_precioPorHora = 0) {
        $this->_razonSocial = $_razonSocial;
        $this->_precioPorHora = $_precioPorHora;
        $this->_autos = array();
    }


    public function MostrarGarage(){
        echo "Razon social: ".$this->_razonSocial."<br>";
        echo "Precio por hora: ".$this->_precioPorHora."<br>";
        echo "Autos: <br>";
        foreach ($this->_autos as $auto) {
            Auto::MostrarAuto($auto);
        }
    }

    public function Equals($auto){
        foreach ($this->_autos as $auto) {
            if($auto->Equals($auto)){
                return true;
            }
        }
        return false;
    }

    public function Add($auto){
        if(!$this->Equals($auto)){
            array_push($this->_autos, $auto);
        }else{
            echo "El auto ya esta en el garage","<br>";
        }
    }


    public function Remove($auto){
        $flag = false;
        foreach ($this->_autos as $key => $auto) {
            if($auto->Equals($auto)){
                unset($this->_autos[$key]);
                $flag = true;
            }
        }
        if(!$flag){
            echo "El auto no esta en el garage ","<br>";
        }else{
            $this->_autos = array_values($this->_autos);
        }
    }     
    
}
$miGarage = new Garage("Garage S.R.L", 100,"<br>");
$auto1 = new Auto("rojo",1000,"Ferrari","19/04/2024","<br>");
$auto2 = new Auto("rojo",1000,"Ford","19/04/2024","<br>");
$auto3 = new Auto("rojo",1000,"Ford","19/04/2024","<br>");
$miGarage->Add($auto1);
$miGarage->Add($auto2);
$miGarage->Add($auto3);
$miGarage->MostrarGarage();