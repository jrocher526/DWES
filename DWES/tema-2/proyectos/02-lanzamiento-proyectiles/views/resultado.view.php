<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Calculadora de Lanzamiento de Proyectiles</title>

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
            <i class="bi bi-calculator-fill"></i>
            <span class="fs-6">Proyecto 2.2 - Resultados Lanzamiento de Proyectiles</span>
        </header>
    
        <!-- contenido principal de la aplicación -->
        <main>

            <div class="content">

            <!-- Tabla de resultados -->
            <table class="table table-hover">

                <tbody>

                    <!-- Valores iniciales -->
                    <tr>
                        <th colspan="2">Valores Iniciales</th>
                    </tr>

                    <tr>
                        <td>Velocidad Inicial</td>
                        <td><?= $velocidad_inicial ?> m/s</td>
                    </tr>

                    <tr>
                        <td>Ángulo de Lanzamiento</td>
                        <td><?= $angulo_lanzamiento ?> grados</td>
                    </tr>

                    <!-- Resultados -->
                    <tr>
                        <th colspan="2">Resultados</th>
                    </tr>

                    <tr>
                        <td>Ángulo en Radianes</td>
                        <td><?= $angulo_radianes ?> rad</td>
                    </tr>

                    <tr>
                        <td>Velocidad Inicial Horizontal</td>
                        <td><?= $velocidad_horizontal ?> m/s</td>
                    </tr>

                    <tr>
                        <td>Velocidad Inicial Vertical</td>
                        <td><?= $velocidad_vertical ?> m/s</td>
                    </tr>

                    <tr>
                        <td>Alcance Máximo</td>
                        <td><?= $alcance_maximo ?> m</td>
                    </tr>

                    <tr>
                        <td>Altura Máxima</td>
                        <td><?= $altura_maxima ?> m</td>
                    </tr>

                    <tr>
                        <td>Tiempo Total de Vuelo</td>
                        <td><?= $tiempo_vuelo ?> s</td>
                    </tr>
                </tbody>
            </table>

            <!-- Botón para volver -->
            <a class="btn btn-warning" href="index.php" role="button">
            Nuevo Cálculo
            </a>

            </div>

        </main>
        
        <!-- pie de página de la aplicación -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">&copy; 2026
                    Juan Carlos Moreno - DWES - 2º DAW - Curso 26/27
                </span>
            </div>
        </footer>

        <!-- js bootstrap básico 5.3.8 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    
    </div>
  </body>
</html>