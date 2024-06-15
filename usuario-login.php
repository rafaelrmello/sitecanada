<?php
$usuario = $_POST['usuario'];
$senhaLimpa = $_POST['senha'];
$senha = hash("sha256", $senhaLimpa);

$sql = "SELECT * FROM usuario WHERE
		usuario = :user AND senha = :passwd ";

include "classes/conexao.php";

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':user', $usuario);
$resultado->bindParam(':passwd', $senha);
$resultado->execute();

$linha = $resultado->fetch();
$usuario_logado = $linha['usuario'];

	if ($usuario_logado != null) {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: adm.php');
		exit();
	}
	
	else {
		header('Location: usuario-erro.php');
		echo ($usuario_logado);
		exit();
	}
