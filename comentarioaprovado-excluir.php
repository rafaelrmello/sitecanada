<?php
    require_once "classes/Comentario.php";

    $id=$_GET['id'];
    $comentario= new Comentario($id);
    $comentario->excluir();
    header('Location: comentarios-aprovadas.php');
?>