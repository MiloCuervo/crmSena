<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Log In</title>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel='stylesheet' href='assets/css/logIn.css'>
    </head>
    <body>
        <div class='CuerpoPagina loginPage'>
            <div class='LibroContainer'>
                <!-- PÁGINA IZQUIERDA - FORMULARIO DE LOGIN -->
                <div class='PaginaLibroIzquierda'>
                    <div class="InternoUsuario">
                        <img src="assets/img/logoSena1.png" alt="logoSena1" >
                        <h2>INICIO DE SESION</h2>
                        <P class="SinCuenta">No tienes Usuario? Escribele a tu administrador</P>
                        <form action="perfil" method="post" name="FormularioLogin">
                            <!-- hidden input para el tipo de usuario seleccionado -->
                            <input type="hidden" name="tipoUsuario" id="tipoUsuarioHidden" value="" />
                            <label>User</label>
                            <p></p>
                            <input name='nombre' id='nombre' type='text' />
                            <p></p>
                            <label>Password</label><p></p>
                            <input name='Password' id='Password' type='Password' />
                    
                            <p></p>
                            <a href="/casos"><button class="BtnLogin" type="button">Iniciar sesion</button></a>
                        </form>
                    </div>
                </div>
                
                <!-- PÁGINA DERECHA - BIENVENIDA -->
                <div class='PaginaLibroDerecha'>
                    <div class="TarjetaBienvenida">
                        <h1 class="TituloBienvenida">Bienvenido a su Sistema de Control y Seguimiento</h1>
                        
                        <div class="SelectorTipoUsuarioButtons">
                            <p class="SubtituloTipo">¿Qué tipo de usuario eres?</p>
                            
                            <button type="button" class="BtnTipoUsuario BtnComisionado" data-tipo="comisionado">
                                <ion-icon name="person-outline"></ion-icon>
                                <span>Comisionado</span>
                            </button>
                            
                            <button type="button" class="BtnTipoUsuario BtnAdministrador" data-tipo="administrador">
                                <ion-icon name="shield-outline"></ion-icon>
                                <span>Administrador</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
        <!-- Scripts incluidos dentro del body para que el script de selección funcione correctamente -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

        <script>
            (function(){
                // Elementos
                const botones = document.querySelectorAll('.BtnTipoUsuario');
                const inputHidden = document.getElementById('tipoUsuarioHidden');
                const STORAGE_KEY = 'crmSena_tipoUsuario';

                if(!botones || !inputHidden) return;

                // Aplica selección visual a un botón
                function aplicarSeleccion(tipo){
                    botones.forEach(b => {
                        if(b.dataset && b.dataset.tipo === tipo){
                            b.classList.add('selected');
                            b.setAttribute('aria-pressed', 'true');
                        } else {
                            b.classList.remove('selected');
                            b.setAttribute('aria-pressed', 'false');
                        }
                    });
                    inputHidden.value = tipo || '';
                }

                // Cargar selección previa desde localStorage
                const seleccionado = localStorage.getItem(STORAGE_KEY);
                if(seleccionado){
                    aplicarSeleccion(seleccionado);
                }

                // Listeners de click
                botones.forEach(btn => {
                    btn.addEventListener('click', function(e){
                        const tipo = btn.dataset.tipo || '';
                        // Alternar: si ya estaba seleccionado, deseleccionar
                        if(btn.classList.contains('selected')){
                            aplicarSeleccion('');
                            localStorage.removeItem(STORAGE_KEY);
                        } else {
                            aplicarSeleccion(tipo);
                            localStorage.setItem(STORAGE_KEY, tipo);
                        }
                    });
                });
            })();
        </script>
    </body>
</html>
