@extends('layouts.layout')
@section('content')
<div class="container-fluid py-4">
    <!-- SECCION: Datos del Perfil del Usuario Actual -->
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="card bg-dark text-light shadow-sm">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <img src="https://via.placeholder.com/120" alt="Perfil" class="rounded-circle img-fluid" style="width: 120px; height: 120px; object-fit: cover;">
                        </div>
                        <div class="col-md-9">
                            <h4 class="card-title mb-3">Nombre del comisionado</h4>
                            <p class="mb-2"><strong>Email:</strong> usuario@email.com</p>
                            <p class="mb-2"><strong>Rol:</strong> <span class="badge bg-info">Administrador</span></p>
                            <p class="mb-2"><strong>Fecha de Registro:</strong> 01/11/2025</p>
                            <p class="mb-0"><strong>Último Acceso:</strong> Hoy 12:45 </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SECCION: Ultimas Actividades (Resumen) -->
        <div class="col-md-4">
            <div class="card bg-dark text-light shadow-sm">
                <div class="card-header bg-secondary">
                    <h5 class="mb-0">Actividad Reciente</h5>
                </div>
                <div class="card-body">
                    <div class="activity-feed" style="max-height: 250px; overflow-y: auto;">
                        <div class="mb-2 pb-2 border-bottom">
                            <small class="text-muted">11/11/2025 14:30</small>
                            <p class="mb-0">Sesión iniciada</p>
                        </div>
                        <div class="mb-2 pb-2 border-bottom">
                            <small class="text-muted">10/11/2025 10:15</small>
                            <p class="mb-0">Sesión iniciada</p>
                        </div>
                        <div class="mb-2 pb-2 border-bottom">
                            <small class="text-muted">09/11/2025 09:45</small>
                            <p class="mb-0">Sesión iniciada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SECCION: Comisionados + Sus Casos Gestionados -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card bg-dark text-light shadow-sm" style="border-radius: 20px; overflow: hidden;">
                <div class="card-body p-5">
                    <div class="row align-items-center">
                        <!-- Lado Izquierdo: Carrusel de Comisionados -->
                        <div class="col-md-4 d-flex flex-column align-items-center justify-content-center">
                            <div id="carruselComisionados" class="carousel slide" data-bs-ride="carousel" style="width: 100%;">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <div class="text-center">
                                            <img src="https://via.placeholder.com/150" alt="Comisionado" 
                                                 class="rounded-circle img-fluid mb-3 comisionado-avatar" 
                                                 data-comisionado-id="1"
                                                 style="width: 150px; height: 150px; object-fit: cover; cursor: pointer; border: 4px solid #6f42c1;">
                                            <h6 class="mt-3 mb-0">Dona Gallardo</h6>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="text-center">
                                            <img src="https://via.placeholder.com/150" alt="Comisionado" 
                                                 class="rounded-circle img-fluid mb-3 comisionado-avatar" 
                                                 data-comisionado-id="2"
                                                 style="width: 150px; height: 150px; object-fit: cover; cursor: pointer; border: 4px solid #6f42c1;">
                                            <h6 class="mt-3 mb-0">Comisionado 2</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Botones de navegación del carrusel -->
                            <div class="mt-4 d-flex justify-content-center gap-2" style="width: 100%;">
                                <button class="btn btn-sm btn-outline-light" type="button" data-bs-target="#carruselComisionados" data-bs-slide="prev">
                                    &lt;
                                </button>
                                <button class="btn btn-sm btn-outline-light" type="button" data-bs-target="#carruselComisionados" data-bs-slide="next">
                                    &gt;
                                </button>
                            </div>
                        </div>

                        <!-- Lado Derecho: Sus Casos Gestionados -->
                        <div class="col-md-8 ps-md-4">
                            <table class="table table-dark table-sm table-hover" id="tablaCasos">
                            <thead>
                                <tr class="table-secondary">
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Estado</th>
                                    <th scope="col">Fecha Creación</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="cuerpoTabla">
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Caso 1</td>
                                    <td>Descripción del caso 1...</td>
                                    <td>
                                        <span class="badge bg-success">Atendido</span>
                                    </td>
                                    <td>11/11/2025</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info" title="Ver detalles">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-warning" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Caso 2</td>
                                    <td>Descripción del caso 2...</td>
                                    <td>
                                        <span class="badge bg-warning text-dark">Pendiente</span>
                                    </td>
                                    <td>10/11/2025</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info" title="Ver detalles">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-warning" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Caso 3</td>
                                    <td>Descripción del caso 3...</td>
                                    <td>
                                        <span class="badge bg-danger">No Atendido</span>
                                    </td>
                                    <td>09/11/2025</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-info" title="Ver detalles">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="#" class="btn btn-sm btn-warning" title="Editar">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

