<?php

$senha = $_POST["senha_usuario"];
$email = $_POST["email_usuario"];

$config = parse_ini_file('../../config.ini');

$db = new mysqli(
    $config['DB_HOST'],
    $config['DB_USERNAME'],
    $config['DB_PASSWORD'],
    $config['DB_DATABASE']
);

if ($db->connect_errno) {
    $msg = "Erro de acesso ao MySQL. (" . $db->connect_errno . ") " . $db->connect_error;
    echo "
        <html>
        <head>
        <META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=" .
        $config['APP_URL'] . "/app/pages/login.php\">
        </head>
        <body>
            <script>
                alert('" . $msg . ".');
            </script>
        </body>
	</html>";
}

$sql = "select * from usuarios where email='$email' and senha='$senha'";

$resposta = $db->query($sql);

if (mysqli_num_rows($resposta) == 1) {
    $registro = mysqli_fetch_array($resposta);

    session_start();
    $_SESSION["nome_usuario"] = $registro["nome_usuario"];

    echo "<html>
		<head>
            <META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=" .
                $config['APP_URL'] . "/app/pages/dashboard.php\">
        </head>
        <body>
            <script>
                alert('Usuário autenticado. Seja bem-vindo.');
            </script>
        </body>
	</html>";
} else {
    echo "<html>
		<head>
            <META HTTP-EQUIV=\"refresh\" CONTENT=\"0; URL=" .
            $config['APP_URL'] . "/app/pages/login.php\">
		</head>
        <body>
            <script>
                alert('Usuário ou senha não encontrados.');
            </script>
        </body>
	</html>";
}

$db->close();
