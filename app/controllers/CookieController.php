<?php
namespace App\Controllers;

class CookieController
{
    public function __construct()
    {
        // echo "en Controller<br>";
    }

    public function index()
    {
        //echo "Estamos en Index de Cookie";
        $usuario = $_COOKIE['usuario'];
        echo $usuario;
    }

    public function usuario()
    {
        include "../views/cookie/usuario.php";
    }
      
    public function guardar()
    {
        $usuario = $_POST['usuario'];
        setcookie('usuario', $usuario, time() + 3600);

        header('Location: /cookie/index');
        
    }
}  