<?php

/* Ejemplo 3.2
* Descripcion: Determina el item de calificacion de un examen
* La calificacion sera:
* - suspenso
* - suficiente
* - bien
* - notable
* - sobresaliente
*/

$nota = 0;

if ($nota < 0) {
    echo "Error";
} elseif ($nota < 5) {
    echo "Suspenso";
} elseif ($nota < 6) {
    echo "Suficiente";
} elseif ($nota < 7) {
    echo "Bien";
} elseif ($nota < 9) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}
