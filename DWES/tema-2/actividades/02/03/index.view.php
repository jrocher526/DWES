<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 2.2</title>

    <!-- css bootstrap básico 5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- icons bootstrap 1.13.1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.css">
  </head>
  <body>
    <!-- capa principal de la aplicación -->
    <div class="container mt-3">

        <!-- cabecera de la aplicación -->
        <header class="bg-primary text-white p-3 mb-3">
            <i class="bi bi-stack"></i>
            <span class="fs-6">Actividad 2.2 - Ej 3: isset()</span>
        </header>
    
        <!-- contenido principal de la aplicación -->
        <main>
            <div class="content">
                <?php
                    echo "<h2>Prueba de isset()</h2>";
                    $valor1 = null;
                    $valor2 = null;
                    $valor3 = $valor1;

                    echo "<h3> Valores true:</h3>";
                    echo "<p>isset(valor1) = " . (isset($valor1) ? "true" : "false") . "</p>";
                    echo "<p>isset(valor2) = " . (isset($valor2) ? "true" : "false") . "</p>";
                    echo "<p>isset(valor3) = " . (isset($valor3) ? "true" : "false") . "</p>";

                    $valor4 = 0;
                    $valor5 = "";
                    $valor6 = false;

                    echo "<h3> Valores false:</h3>";
                    echo "<p>isset(valor4) = " . (isset($valor4) ? "true" : "false") . "</p>";
                    echo "<p>isset(valor5) = " . (isset($valor5) ? "true" : "false") . "</p>";
                    echo "<p>isset(valor6) = " . (isset($valor6) ? "true" : "false") . "</p>";
                    /*
                        Con isset() se comprueba si una variable booleana está definida y no es igual a null devuelve true, 
                        en caso contrario devuelve false.
                    */
                ?>           
            </div>

        </main>
        
        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Jhonal Roca - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    </div>
  </body>
</html>