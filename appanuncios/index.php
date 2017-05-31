<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Página de Inicio</title>
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <script>
            function validarAcceso()
            {

                document.form.action = "CONTROLADOR/UsuarioControlador.php";
                document.form.method = "GET";
                document.form.op.value = "1";
                document.form.submit();
            }
        </script>

    </head>
    <body>
        <div class="container">
            <form name="form" class="form-signin">
                <input type="hidden" name="op" >
                <h2 class="form-signin-heading">Por favor ingrese</h2>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="text" name="txtusu" id="txtusu" class="form-control" placeholder="ingrese su cuenta" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="txtcla" id="txtcla" class="form-control" placeholder="ingrese su contraseña" required>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block" type="submit" onclick="validarAcceso()">Sign in</button>
            </form>
        </div> <!-- /container -->








        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>  

    </body>
</html>
