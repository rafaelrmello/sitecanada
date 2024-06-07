<?php
    require_once "classes/comentario.php";

    $comentario=new Comentario();
    
    $comentario->email=$_POST['email'];
    $comentario->comentario=$_POST['comentario'];

    $comentario->comentarioinserir();

    header("refresh:0.8; URL=comentarios.php");
?>