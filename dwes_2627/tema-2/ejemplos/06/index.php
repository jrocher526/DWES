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
    <title>Ejemplo 06 - PHP</title>
</head>
<body>
    <h1>Ficha de alumno</h1>

        <!-- Mostrar los valores de las variables en HTML -->
         <?php
            // Con comillas simples no se interpreta la variable, se muestra tal cual
            echo '<p>Con comillas simples no se interpreta la variable, se muestra tal cual</p>';   
            echo '<b>Nombre:</b> . $nombre<br>';

            // Con comillas dobles se interpreta la variable y se muestra su valor
            echo "<p>Con comillas dobles se interpreta la variable y se muestra su valor</p>";
            echo "<b>Nombre:</b> $nombre<br>";
        ?>

    </body>
</html>