<?php

    require_once "classes/Comentario.php";

    $id=$_GET['id'];
    $comentario= new Comentario($id);
    $comentario->aprovar();
    header('Location: adm.php');
?>