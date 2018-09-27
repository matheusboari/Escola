<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            Gestão Escolar
        </title>

        <?php include_once('css.inc.php');  ?>
    </head>

    <body class="back-registro">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        Gestão Escolar
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="app/pages/login.php"><i class="fa fa-sign-in-alt"></i> Login</a></li>
                        <li><a href="app/pages/register.php">Registrar-se</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <html class="registro-box">
            <div class="registro-box-body">
                <div class="row" style="text-align: center">
                    <span class="registro-titulo">
                        Identifique-se
                    </span>
                </div>

                <hr class="registro-linha">

                <div class="row" style="text-align: center">
                    <p class="registro-subtitulo">
                        Forneça os dados solicitados
                    </p>
                </div>

                <!-- Formulário que solicita os dados do usuário -->
                <form action="cadastra_usuario.php" method="post" autocomplete="off">
                    <div class="input-group">
                        <span class="input-group-addon" id="input-nome_usuario">
                            <span class="fas fa-user"></span>
                        </span>
                        <input autocomplete="off" type="text" class="form-control" name="nome_usuario" required placeholder="Nome do usuário" aria-describedby="input-usuario">
                    </div>

                </form>

            </div>
            </div>

            <?php include_once('javascript.inc.php'); ?>
    </body>

</html>