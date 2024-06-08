<?php
    require_once "classes/Comentario.php";
    $id=$_GET['id'];
    $comentario=new Comentario($id);
    $lista=$comentario->listar();
?>

<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="Estilos/comentarios-editar.css">
        <title>Atualizar Pergunta</title>
    </head>
    <body>

    <div class="sidebar">
        <div class="admin-section">
            <h2>Portal do Administrador</h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="adm.php">Comentários em Aguardo</a><br></h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="comentarios-aprovadas.php">Comentários Aprovados</a><br><br></h2>
        </div>
        <div class="suggestions-section">
            <h2><a href="index.html">Sair</a><br><br></h2>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            Atualização do Comentário
        </div>

        <table border="1">
            <tr>
                <th>E-mail</th>
                <th>Comentário</th>
            </tr>
        <table>


        <form action="comentario-editar-gravar.php" method="POST">
            <input type="hidden" name="id" value="<?=$comentario->id?>">
            <input type="text" id="email" name="email" value="<?=$comentario->email?>">
            <input type="text" id="comentario" name="comentario" value="<?=$comentario->comentario?>">
            <br><br>
            <input type="submit" value="Atualizar" id="atualizar">
        </form>
    </body>
</html>