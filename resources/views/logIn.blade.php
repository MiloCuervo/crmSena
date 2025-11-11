<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Log In</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel='stylesheet' href='{{url("css/logIn.css")}}'>
    </head>
    <body>
        <div class='CuerpoPagina loginPage'>
            <div class='WrapDeColumnas'>
                <div class='ColumnaIzquierda'>
                </div>
                <div class="ColumnaCentral">
                    <div class="InternoUsuario">
                        <img src="#" alt="logoSena1" width=212 height=117>
                        <h2>INICIO DE SESION</h2>
                        <P class="SinCuenta">No tienes Usuario? Escribele a tu administrador</P>
                                <form action="action.php" method="post" name="FormularioLogin">
                                    <label>User</label>
                                    <p></p>
                                    <input name='nombre' id='nombre' type='text' />
                                    <p></p>
                                    <label>Password</label><p></p>
                                    <input name='Password' id='Password' type='Password' />
                                    <p></p>
                                    <!--button type='submit'><a href='Views/PerfilPP.php'>Validar</a></button-->
                                    <a href="/perfil.blade.php"><button class="">Iniciar sesion</button></a>
                                </form>
                    </div>
                </div>    
                <div class='ColumnaDerecha'>
                    
                </div>
            </div>    
        </div>
    </body>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</html>
