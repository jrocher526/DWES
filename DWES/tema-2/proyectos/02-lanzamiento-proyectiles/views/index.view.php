<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 2.2 - Lanzamiento de Proyectiles</title>

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
            <span class="fs-6">Proyecto 2.2 - Lanzamiento de Proyectiles</span>
        </header>
    
    <!-- contenido principal de la aplicación -->
    <main>
        <form method="post">

            <!-- Velocidad inicial -->
            <div class="mb-3">

                <label for="velocidad_inicial" class="form-label">
                    Velocidad Inicial:
                </label>

                <input
                    type="number"
                    class="form-control"
                    id="velocidad_inicial"
                    name="velocidad_inicial"
                    step="0.01"
                    placeholder="0.00"
                    required>

                <div class="form-text">
                    Velocidad en m/s
                </div>

            </div>


            <!-- Ángulo -->
            <div class="mb-3">

                <label for="angulo_lanzamiento" class="form-label">
                    Ángulo de Lanzamiento:
                </label>

                <input
                    type="number"
                    class="form-control"
                    id="angulo_lanzamiento"
                    name="angulo_lanzamiento"
                    step="0.01"
                    placeholder="0.00"
                    required>

                <div class="form-text">
                    Ángulo en grados
                </div>

            </div>


            <!-- Botones -->
            <div class="btn-group">

                <button type="reset"
                        class="btn btn-danger">
                    Borrar
                </button>

                <button type="submit"
                        class="btn btn-primary"
                        formaction="calcular.php">
                    Calcular
                </button>

            </div>

        </form>

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