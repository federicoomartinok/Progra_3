 <?php
class Usuario {
    public $nombre;
    public $apellido;
    public $clave;
    public $mail;
    public $localidad;


     function __construct() {        
    }


    public static CrearObjeto ($nombre,$apellido,$clave,$mail,$localidad){
        $usuario = new Usuario();
        $usuario->nombre = $nombre;
        $usuario->apellido = $apellido;
        $usuario->clave = $clave;
        $usuario->mail = $mail;
        $usuario->localidad = $localidad;

        return $usuario;
    }


}
