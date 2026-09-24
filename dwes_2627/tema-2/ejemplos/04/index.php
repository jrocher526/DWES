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
    <title>Ejemplo 04 - PHP</title>
</head>
<body>
    <h1>Ficha de alumno</h1>

        <!-- Mostrar los valores de las variables en HTML -->
        <b>Nombre:</b> <?php echo $nombre; ?><br>
        <b>Apellido:</b> <?php echo $apellido; ?><br>
        <b>Edad:</b> <?php echo $edad; ?><br>
        <b>Población:</b> <?php echo $poblacion; ?><br>
    </body>
</html>