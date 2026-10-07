<?php

/*
 controlador: calcular.php

 Proyecto: proyecto 2.2 - calculo lanzamiento proyectiles
 Descripción: Controlador de calculadora de lanzamiento de proyectiles

 Alumno: Jhonal Roca
 Fecha: 06/10/26
*/

// Modelo

// Definir constante para la gravedad
define("G", 9.81);

// Obtener los valores del formulario
$velocidad_inicial = (float) ($_POST['velocidad_inicial'] ?? 0);
$angulo_lanzamiento = (float) ($_POST['angulo_lanzamiento'] ?? 0);

// Convertir el ángulo de grados a radianes
$angulo_radianes = deg2rad($angulo_lanzamiento);

// Calculamos la velocidad horizontal
$velocidad_horizontal = $velocidad_inicial * cos($angulo_radianes);

// Calculamos la velocidad vertical
$velocidad_vertical = $velocidad_inicial * sin($angulo_radianes);

// Calculamos el alcance máximo
$alcance_maximo =
    (pow($velocidad_inicial, 2) * sin(2 * $angulo_radianes)) / G;

// Calculamos la altura máxima
$altura_maxima =
    (pow($velocidad_inicial, 2) * pow(sin($angulo_radianes), 2)) / (2 * G);

// Calculamos el tiempo total de vuelo
$tiempo_vuelo = (2 * $velocidad_vertical) / G;


// Formato europeo para mostrar los resultados

$velocidad_inicial = number_format($velocidad_inicial, 2, ",", ".");
$angulo_lanzamiento = number_format($angulo_lanzamiento, 2, ",", ".");

$angulo_radianes = number_format($angulo_radianes, 2, ",", ".");

$velocidad_horizontal = number_format($velocidad_horizontal, 2, ",", ".");
$velocidad_vertical = number_format($velocidad_vertical, 2, ",", ".");

$alcance_maximo = number_format($alcance_maximo, 2, ",", ".");
$altura_maxima = number_format($altura_maxima, 2, ",", ".");
$tiempo_vuelo = number_format($tiempo_vuelo, 2, ",", ".");


// Vista
include "views/resultado.view.php";