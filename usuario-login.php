<?php
$email = $_POST['email'];
$senha = hash("sha256", $_POST['senha']);

$sql = "SELECT * FROM usuario
        WHERE email = :user
        AND senha = :passwd ";



include "classes/conexao.php";

$resultado = $conexao->prepare($sql);
$resultado->bindParam(':user', $email);
$resultado->bindParam(':passwd', $senha);
$resultado->execute();

$linha = $resultado->fetch();
$usuario_logado = $linha['email'];

	if ($usuario_logado == null) {
		// Usuário ou senha inválida
		header('Location: usuario-erro.php');
	} else {
		session_start();
		$_SESSION['usuario_logado'] = $usuario_logado;
		header('Location: adm.php');
		exit();
	}


?>

