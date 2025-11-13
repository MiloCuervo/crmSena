<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Crear Caso</title>
    <link rel="stylesheet" href="../assets/css/crearCaso.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card crear-caso-card shadow-sm border-0">
                    <div class="card-header crear-caso-header text-white">
                        <h3 class="mb-0">Crear Nuevo Caso</h3>
                    </div>
                    <div class="card-body p-4">
                        <form action="/casos" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="nombre" class="form-label fw-bold">Nombre del Caso</label>
                                <input type="text" class="form-control crear-caso-input" id="nombre" name="nombre" required>
                            </div>
                            <div class="mb-3">
                                <label for="descripcion" class="form-label fw-bold">Descripción</label>
                                <textarea class="form-control crear-caso-input" id="descripcion" name="descripcion" rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="estado" class="form-label fw-bold">Estado</label>
                                <select class="form-select crear-caso-input" id="estado" name="estado" required>
                                    <option value="">Seleccione un estado</option>
                                    <option value="pendiente">Pendiente</option>
                                    <option value="en_proceso">En Proceso</option>
                                    <option value="resuelto">Resuelto</option>
                                    <option value="cerrado">Cerrado</option>
                                </select>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                                <a href="/casos" class="btn btn-secondary btn-cancelar">Cancelar</a>
                                <button type="submit" class="btn btn-dark btn-crear-caso">Crear Caso</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
