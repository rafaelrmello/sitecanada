<?php
try {
    $usuario = $_POST ["usuario"];
    $email = $_POST ["email"];
    $senha = hash ("sha256", $_POST["senha"]);


    $sql = "INSERT INTO usuario (usuario, email, senha) VALUES ('{$usuario}', '{$email}', '{$senha}')";

    include_once "classes/conexao.php";
    $conexao->exec($sql);
    echo "<h3>Usuário registrado com sucesso</h3>";
    header("Location: login.html");
}
catch (Exception $erro) {
    echo $erro->getMessage();
    echo "Ocorreu um erro";
}

?>
