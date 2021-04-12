<?php
namespace App\Controllers;

class UsuarioController
{
    public function __construct()
    {
        // echo "en UsuarioController<br>";
    }

    public function index()
    {
        echo "Estamos en Index de Usuario";
    }

    public function crear()
    {
        // echo "Estamos en el metodo crear de Usuario";
        include "../views/usuario/crear.php";
    }
      
    public function mostrar()
    {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $sexo = $_POST['sexo'];

        if (isset($_POST['aficiones'])) {
            $aficiones = $_POST['aficiones'];
        }else {
            $aficiones = array();
        }
        include "../views/usuario/mostrar.php";
    }

    public function deseos()
    {
        $deseo = $_POST['nuevodeseo'];
        $lista = $_POST['lista'];

        if (!isset($lista)){
            $lista = [];
        }

        if (isset($lista)){
            $lista[] = $deseo;
        }

        include "../views/usuario/deseos.php";
    }
}  