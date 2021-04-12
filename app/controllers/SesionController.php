<?php
namespace App\Controllers;

class SesionController
{
    public function __construct()
    {
        // echo "en Controller<br>";
        session_start();
    }

    public function index()
    {
        //echo "Estamos en Index de Sesion";
        $usuario = $_SESSION['usuario'];
        //echo $usuario;
        include "../views/sesion/index.php";
    }

    public function usuario()
    {
        include "../views/sesion/usuario.php";
    }
      
    public function guardar()
    {
        $usuario = $_POST['usuario'];
        $_SESSION['usuario'] = $usuario;
        header('Location: /sesion/index');
        
    }
}  