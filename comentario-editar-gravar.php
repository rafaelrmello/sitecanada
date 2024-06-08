<?php
    require_once "classes/Comentario.php";

    $id=$_POST['id'];
    $comentario= new Comentario($id);

    $comentario->email=$_POST['email'];
    $comentario->comentario=$_POST['comentario'];

    $comentario->atualizar();
    header('Location: comentarios-aprovadas.php');
?>