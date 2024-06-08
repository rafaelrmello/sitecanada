<?php
    require_once "classes/Comentario.php";
    $comentario=new Comentario();
    $lista=$comentario->listar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentários</title>
    <link rel="stylesheet" href="Estilos/adm.css">
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
            Novos Comentários
        </div>

        <table border="1">
            <tr>
                <th>E-mail</th>
                <th>Comentário</th>
                <th id="acoes">Ações</th>
            </tr>


            <?php foreach ($lista as $linha):?>
            <tr>
                <td><?php echo $linha['email']?></td>
                <td><?php echo $linha['comentario']?></td>
                <td>
                    <button id="postar"><a href="comentario-aprovar.php?id=<?=$linha['ID_Comentario']?>">Aprovar</a></button>
                    <button class="botao"><a href="comentario-excluir.php?id=<?=$linha['ID_Comentario']?>">Excluir</a></button>
                </td>
            </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
</html>