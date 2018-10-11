<?php
$config = parse_ini_file('../../config.ini');
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>
            <?php echo $config['APP_NAME']; ?>
        </title>

        <?php include_once 'css.inc.php'; ?>
    </head>

    <body class="back-registro">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed"
                        data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">

                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>

                    </button>
                    <a class="navbar-brand" href="<?php echo $config['APP_URL']; ?>">
                        <?php echo $config['APP_NAME']; ?>
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo $config['APP_URL']; ?>/app/pages/login.php">
                                <i class="fa fa-sign-in-alt"></i> Login
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $config['APP_URL']; ?>/app/pages/register.php">
                                Registrar-se
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="registro-box">
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
                <form action="valida_usuario.php" method="post" autocomplete="off">

                    <!-- E-mail do Usuário -->
                    <div class="input-group">
                        <span class="input-group-addon" id="input-email_usuario">
                            <span class="fas fa-at"></span>
                        </span>
                        <input autocomplete="off" type="email" class="form-control"
                            name="email_usuario" required placeholder="E-mail do usuário"
                            aria-describedby="input-email">
                    </div>
                    <br/>

                    <!-- Senha do Usuário -->
                    <div class="input-group">
                        <span class="input-group-addon" id="input-senha_usuario">
                            <span class="fas fa-key"></span>
                        </span>
                        <input autocomplete="off" type="password" class="form-control"
                            name="senha_usuario" required placeholder="Senha do usuário"
                            aria-describedby="input-senha">
                    </div>
                    <br/>

                    <!-- Botão de envio -->
                    <div class="row" style="margin-bottom:10px">
                        <div class="col-xs-12">
                            <button type="submit"
                                class="btn btn-primary btn-block btn-flat">
                                <span class="fas fa-lock"> Acessar</span>
                            </button>
                        </div>
                    </div>

                </form>

            </div>
            </div>

            <?php include_once 'javascript.inc.php'; ?>
    </body>

</div>
