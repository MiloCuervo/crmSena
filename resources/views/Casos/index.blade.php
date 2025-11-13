<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/Casos.css">
    <title>Gestión de Casos</title>
</head>

<body>
    @include('components.barraNavegacion')

    <!-- Header con título y botón de nuevo caso -->
    <div class="page-header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <a href="/casos/crear" class="btn-nuevo">
                        <i class="bi bi-plus-circle-fill"></i>
                        <span>Nuevo Caso</span>
                    </a>
                </div>
                <div class="col-lg-8 text-end">
                    <h1 class="header-title">
                        <i class="bi bi-clipboard2-data me-2"></i>
                        Gestión de Casos
                    </h1>
                    <p class="header-subtitle">Sistema de Control y Seguimiento</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-4">
        <!-- Estadísticas -->
        <div class="row g-3 mb-4">
            <div class="col-md-3">
                <div class="stat-card stat-warning">
                    <i class="bi bi-hourglass-split"></i>
                    <div class="stat-info">
                        <h3>0</h3>
                        <p>Pendientes</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card stat-info">
                    <i class="bi bi-arrow-repeat"></i>
                    <div class="stat-info">
                        <h3>0</h3>
                        <p>En Proceso</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card stat-success">
                    <i class="bi bi-check-circle"></i>
                    <div class="stat-info">
                        <h3>0</h3>
                        <p>Resueltos</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="stat-card stat-dark">
                    <i class="bi bi-archive"></i>
                    <div class="stat-info">
                        <h3>0</h3>
                        <p>Total</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Búsqueda y Filtros -->
        <div class="filter-card mb-4">
            <form method="GET" action="/casos">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-search"></i></span>
                            <input type="text" class="form-control" name="buscar" placeholder="Buscar casos...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="form-select" name="estado">
                            <option value="">Todos los estados</option>
                            <option value="pendiente">Pendiente</option>
                            <option value="en_proceso">En Proceso</option>
                            <option value="resuelto">Resuelto</option>
                            <option value="cerrado">Cerrado</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-filtrar w-100">
                            <i class="bi bi-funnel"></i> Filtrar
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Tabla de Casos -->
        <div class="table-card">
            <h5 class="table-title"><i class="bi bi-list-ul"></i> Lista de Casos</h5>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Estado</th>
                            <th>Cantidad de seguimientos</th>
                            <th class="text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($casos as $caso)
                        <tr>
                            <td class="fw-bold">#{{ $caso->id }}</td>
                            <td>{{ $caso->titulo }}</td>
                            <td class="text-muted">{{ Str::limit($caso->descripcion, 50) }}</td>
                            <td><span class="badge-estado estado-{{ $caso->estado }}">{{ ucfirst(str_replace('_', ' ', $caso->estado)) }}</span></td>
                            <td><i class="bi bi-file-earmark-fill"></i></td>
                            <td class="text-center">
                                <a href="#" class="btn-action btn-view" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <a href="#" class="btn-action btn-edit" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <button class="btn-action btn-delete" title="Eliminar">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
