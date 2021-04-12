<?php
namespace App\Controllers;

class CalculadoraController
{
    public function __construct()
    {
        // echo "en Controller<br>";
        session_start();
    }

    public function index()
    {
        //echo "Estamos en Index de Calculadora";
        include "../views/calculadora/index.php";
        
    }
      
    public function calcular()
    {
        $op1 = $_POST['op1'];
        $op2 = $_POST['op2'];
        $operador = $_POST['operador'];

        if (isset($_POST['operador']) == "suma") {
            $resultado = $op1 + $op2;
        }
        if (isset($_POST['operador']) == "resta") {
            $resultado = $op1 - $op2;
        }
        if (isset($_POST['operador']) == "multi") {
            $resultado = $op1 * $op2;
        }
        if (isset($_POST['operador']) == "division") {
            $resultado = $op1 / $op2;
        }

        $operacion = [];
        $operacion = [$op1, $op2, $operador, $resultado];

        $historico[] = $operacion;
        $_SESION['historico'] = $historico;

        header("Location: /calculadora/index");
        //echo $resultado;
    }
}  