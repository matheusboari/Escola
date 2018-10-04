<?php

$nome_usuario = $_POST["nome_usuario"];
$senha = $_POST["senha_usuario"];
$email = $_POST["email_usuario"];

$nome_usuario = trim($nome_usuario);
$senha = trim($senha);
$email = trim($email);

$config = parse_ini_file('../../config.ini');

$db = new mysqli(
    $config['DB_HOST'],
    $config['DB_USERNAME'],
    $config['DB_PASSWORD'],
    $config['DB_DATABASE']
);

if ($db->connect_errno) {
    echo "Erro de acesso ao MySQL.<br>";
    echo "Mensagem: (" . $db->connect_errno . ") " . $db->connect_error;
}

$sql = "insert into usuarios (nome_usuario, email, senha)
	    values ('$nome_usuario', '$email', '$senha');";

$resposta = $db->query($sql);

if ($resposta != true) {
    echo "<h2>Erro de inserção na tabela de usuários.</h2><br>";
    echo "<html>
		<head>
			<META HTTP-EQUIV=\"refresh\" CONTENT=\"10; URL=" . $config['APP_URL'] . "/app/pages/register.php\">
		</head>
	</html>";
} else {
    echo "<html>
		<head>
			<META HTTP-EQUIV=\"refresh\" CONTENT=\"1; URL=" . $config['APP_URL'] . "\">
		</head>
	</html>";
}

$db->close();
