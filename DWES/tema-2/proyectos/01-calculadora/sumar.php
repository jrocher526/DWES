<?php

/*
 controlador: sumar.php

 Proyecto: proyecto 2.1 - calculadora básica
 Descripción: Calculadora de operaciones básicas:
    - suma
    - resta
    - multiplicación
    - división
    - potencia
    - ...
 Alumno: [Nombre del alumno]
 Fecha:
 
*/

// Modelo

// Negociado del controlador
// Recoger los valores del formulario

$valor1 =  $_POST['valor1'];
$valor2 =  $_POST['valor2'];

// Realizar la operación de suma
$resultado = $valor1 + $valor2;

$operacion = "Suma";

// Vista
include "views/resultado.view.php";