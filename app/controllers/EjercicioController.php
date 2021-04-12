<?php
namespace App\Controllers;

class EjercicioController
{
    public function __construct()
    {
        // echo "en EjercicioController<br>";
    }

    public function index()
    {
        echo "Ejercicios de enrutamiento y formularios";
    }

    public function crearlista()
    {
        // echo "Estamos en el metodo crearlista de ejercicio";
        include "../views/ejercicio/crearlista.php";
    }
      
    public function mostrarlista()
    {
        if (isset($_POST['listas'])) {
            $listas = $_POST['listas'];
        }else {
            $listas = array();
        }
        include "../views/ejercicio/mostrarlista.php";
    }

    public function pares()
    {
        $pares = [];

        include "../views/ejercicio/pares.php";
    }

    public function aleatorio()
    {
        
        include "../views/ejercicio/aleatorio.php";
    }

    public function primos()
    {
        
        include "../views/ejercicio/primos.php";
    }

    public function rectangulo()
    {
        include "../views/ejercicio/rectangulo.php";
    }

    public function mostrarrectangulo()
    {
        $base = $_POST['base'];
        $altura = $_POST['altura'];

        include "../views/ejercicio/mostrarrectangulo.php";
    }
    
}  