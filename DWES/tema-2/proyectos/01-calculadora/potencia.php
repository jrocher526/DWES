<?php

/*

 Proyecto: proyecto 2.1 - calculadora básica
 Descripción: Calculadora de operaciones básicas:
    - suma
    - resta
    - multiplicación
    - división
    - potencia
 Alumno: Jhonal Roca
 Fecha: 06/10/26
 
*/

// Modelo

// Negociado del controlador
// Recoger los valores del formulario
$valor1 = (float) $_POST['valor1'] ?? 0;
$valor2 = (float) $_POST['valor2'] ?? 0;

// Realizar la operación de potencia
$resultado = pow($valor1, $valor2);

$operacion = "Potencia";

// Vista
include 'views/resultado.view.php';