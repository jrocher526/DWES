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
 Alumno: Jhonal Roca
 Fecha:06/10/26
 
*/

// Modelo

// Negociado del controlador
// Recoger los valores del formulario

$valor1 =  $_POST['valor1'];
$valor2 =  $_POST['valor2'];

// Realizar la operación de resta
$resultado = $valor1 - $valor2;

$operacion = "Resta";

// Vista
include "views/resultado.view.php";