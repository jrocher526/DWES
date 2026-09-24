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
    <title>Ejemplo 05 - PHP</title>
</head>
<body>
    <h1>Ficha de alumno</h1>

        <!-- Mostrar los valores de las variables en HTML -->
        <b>Nombre:</b> <?= $nombre ?><br>
        <b>Apellido:</b> <?= $apellido ?><br>
        <b>Edad:</b> <?= $edad ?><br>
        <b>Población:</b> <?= $poblacion ?><br>
    </body>
</html>