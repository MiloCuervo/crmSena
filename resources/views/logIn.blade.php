<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inicio de Sesión - CRM SENA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/logIn.css">
</head>
<body>
    <div class="CuerpoPagina">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 col-lg-5">
                    <div class="card shadow-lg border-0">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <img src="assets/img/logoSena1.png" alt="Logo SENA" class="img-fluid mb-3" style="max-width: 180px;">
                                <h2 class="fw-bold text-dark mb-2">Inicio de Sesión</h2>
                                <p class="text-muted small">¿No tienes usuario? Escríbele a tu administrador</p>
                            </div>
                            
                            <form action="perfil" method="post" name="FormularioLogin">
                                @csrf
                                <div class="mb-3">
                                    <label for="nombre" class="form-label fw-semibold">Usuario</label>
                                    <input type="text" class="form-control form-control-lg" id="nombre" name="nombre" required>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="Password" class="form-label fw-semibold">Contraseña</label>
                                    <input type="password" class="form-control form-control-lg" id="Password" name="Password" required>
                                </div>
                                
                                <div class="d-grid">
                                    <a href="/casos" class="btn btn-success btn-lg fw-semibold">Iniciar Sesión</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprnAjCjg5g5l5KDc7dq8DoT8SiXRkMdJ5E9dFBNrFpGxVuBCCp4iF8tD5jP0FTN" crossorigin="anonymous"></script>
</body>
</html>
