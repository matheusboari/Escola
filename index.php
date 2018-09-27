<?php
    $config = parse_ini_file('config.ini');
?>

<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <?php include_once 'app/pages/css.inc.php'; ?>

        <title>
            <?php echo $config['APP_NAME']; ?>
        </title>
    </head>

    <body class="back">
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
                    <a class="navbar-brand" href="<?php echo $config['APP_URL']; ?>">
                        <i class="fa fa-graduation-cap"></i>
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
                                <i class="fa fa-user-plus"></i> Registrar-se
                            </a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <?php include_once 'app/pages/javascript.inc.php'; ?>
    </body>
</html>