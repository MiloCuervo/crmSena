@extends('layouts.layout')
@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-12">
            <div class="card bg-dark text-light shadow-sm">
                <div class="table-responsive">
                    <!-- Información principal  -->
                    <div class="mb-4 bg-light text-dark p-3 rounded">
                        <h4 class="mb-1">{{$casos->titulo}}</h4>
                        <p class="mb-3">Creado por: {{$casos->creado_por}} <span class="mx-2">
                        <p class="mb-0"><strong>Estado:</strong>
                            <span class="badge bg-warning text-dark">{{$casos->estado}}</span>
                        </p>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="card bg-secondary text-dark mb-3">
                                <div class="tabble-content p-3">
                                    <h5 class="card-title">Descripción</h5>
                                    <p class="card-text">{{$casos->descripcion}}</p>
                                </div>
                            </div>

                        <div class="col-md-3">
                            <div class="card bg-dark text-light">
                                <div class="card-body">
                                    <a href="/Casos" class="btn btn-sm btn-primary w-100 mb-2">Volver</a>
                                    <a href="#" class="btn btn-sm btn-success w-100">Editar</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Seguimientos (rellena con tus datos) -->
                    <div class="mt-4">
                        <h5>Seguimientos</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item bg-dark text-light d-flex justify-content-between align-items-start">
                                <div>
                                    <strong>DD/MM/YYYY</strong>
                                    <p class="mb-0">Observación de ejemplo 1.</p>
                                </div>
                                <small class="text-muted">Nombre Usuario</small>
                            </li>
                            <li class="list-group-item bg-dark text-light d-flex justify-content-between align-items-start">
                                <div>
                                    <strong>DD/MM/YYYY</strong>
                                    <p class="mb-0">Observación de ejemplo 2.</p>
                                </div>
                                <small class="text-muted">Nombre Usuario</small>
                            </li>
                            <li class="list-group-item bg-dark text-light d-flex justify-content-between align-items-start">
                                <div>
                                    <strong>DD/MM/YYYY</strong>
                                    <p class="mb-0">Observación de ejemplo 3.</p>
                                </div>
                                <small class="text-muted">Nombre Usuario</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
