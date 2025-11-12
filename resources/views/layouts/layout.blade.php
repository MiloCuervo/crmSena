<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/app.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <header>
        <div class="flex flex-column items-center justify-center BarraPrincipal">
            <nav>
                <ul>
                    <li class='BoxInicio'><a href='#'>Home</a></li>
                    <li class='BoxCasos'><a href="Casos.php">Casos</a></li>
                    <li class='BoxCalend'><a href="Calendario.php">Calendario</a></li>
                    <li class='BoxInform'><a href="Informes.php">Informes</a></li>
                    <li class='BoxRegist'><a href="Registros.php">Registros</a></li>
                    <li class='BoxPerfil'><a href="/"><ion-icon name="people-circle-outline" size="small"></ion-icon>Perfil</a></li>
                </ul>
            </nav>
        </div>
    </header>
    @yield('content')
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>