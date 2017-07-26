<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sistema Monitoreo Constituyente</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="public/images/favicon.ico">
        <script type="text/javascript" languge="javascript" src="<?php echo Conectar::ruta() ?>/public/js/funciones.js"></script>
    </head>

    <body>
        <!-- Contenido Principal -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <img src="public/images/Constituyente.png" alt="La Constituyente Si Va">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Iniciar Sesión</h3>
                                    <p>Ingresar Usuario Y Constraseña:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-lock"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" id="ingreso" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only">Usuario</label>
                                        <input type="text" name="usuario" placeholder="Usuario..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only">Contraseña</label>
                                        <input type="password" name="passwd" placeholder="Contraseña..." class="form-password form-control" id="form-password">
                                    </div>
                                    <input class="btn" type="hidden" name="grabar" value="si">
                                    <button name="aceptar" type="submit" class="btn" value="aceptar">Entrar</button>
                                </form>
                                <?php
                                    if (isset($_GET["m"])) {
                                    ?>

                                <?php
                                    switch ($_GET["m"]) {
                                    case '1':
                                    ?>

                                <h6 style="color:red">El formulario presenta los siguientes errores:</h6><br>
                                <h6 style="color: red">Debe colocar su nombre de Usuario.</h6>
                                
                                <?php
                                    break;
                                    case '2':
                                    ?>

                                <h6 style="color:red">El formulario presenta los siguientes errores:</h6><BR>
                                <h6 style="color: red">Debe colocar su contrase&ntilde;a.</h6>
                                
                                <?php
                                    break;
                                    case '3':
                                    ?>
            
                                <h6 style="color:red">El formulario presenta los siguientes errores:</h6><br>
                                <h6 style="color: red">El usuario o la contrase&ntilde;a es incorrecto o no existe, por favor trate de nuevo.</h6>
                                
                                <?php
                                    break;
                                    case '4':
                                    ?>
            
                                <h6 style="color: green">Usted ha cerrado sesi&oacute;n exitosamente.</h6>
                                
                                <?php
                                    break;
                                    default:
                                    break;
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->
    </body>
</html>