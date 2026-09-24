<!-- Comentario HTML -->

<?php

    $nombre = "Juan";
    $apellido = "Pérez";
    $edad = 30;
    $poblacion = "Madrid";

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo 03 - PHP</title>
</head>
<body>
    <h1>Ficha de alumno</h1>
    <?php
        // Mostrar los valores de las variables en HTML
        echo "<b>Nombre:</b> " . $nombre . "<br>";
        echo "<b>Apellido:</b> " . $apellido . "<br>";
        echo "<b>Edad:</b> " . $edad . "<br>";
        echo "<b>Población:</b> " . $poblacion . "<br>";
    ?>
</body>
</html>