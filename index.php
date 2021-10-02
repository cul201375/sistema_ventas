<?php

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content = "width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content ="ie=edge">
        <title>Inicio de Sesion</title>

        <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <body>
        <div class='container'>
            <br>
            <br>
            <br>
            <div class="mb-3">
                </div>
                    <form id="formlogin" class="form" action="modules/login/loginController.php" method="post">
                        <h1>Inicio de Sesión</h1>
                        <div class="col-auto">
                            <label for="user" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="user" name="user" placeholder="Usuario" aria-describedby="userAyuda">
                            <div id='userAyuda' class="form-text">Este campo sirve para que ingreses tu usuario</div>
                            <br>
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword2" class="visually-hidden">Password</label>
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña" aria-describedby="userClave">
                            <div id='userClave' class="form-text">Este campo sirve para que ingreses tu contraseña</div>
                            <br>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary mb-3">Ingresar al Sistema</button>
                        </div>
                    </form>
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
            </div>
    </body>
    </head>
</html>