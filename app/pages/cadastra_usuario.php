<?php

$nome_usuario = $_POST["nome_usuario"];
$senha = $_POST["senha_usuario"];
$email = $_POST["email_usuario"];

$nome_usuario = trim($nome_usuario);
$senha = trim($senha);
$email = trim($email);

$config = parse_ini_file('../../config.ini');

$db = new mysqli (
	$config["DB_HOST"],
	$config["DB_USER"],
	$config["DB_PASSWORD"],
	$config["DB_DATABASE"]
);

if ($db->connect_errno) {
	echo "Erro de acesso ao MySQL.<br>";
	echo "Mensagem: (" . $db->connect_errno . ") " . $db->connect_error;
} else {
	echo "Acessado com sucesso o MySQL.";
}

?>
