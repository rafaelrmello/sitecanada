<?php
class Comentario{
    public $id;
    public $email;
    public $comentario;

    
    public function comentarioinserir(){
        $sql="INSERT INTO comentario VALUES ('{$this->id}',
        '{$this->email}', '{$this->comentario}')";

        
    include "Classes/conexao.php";
    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }


    public function listar(){
        $sql="SELECT email, comentario FROM comentario";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }

    public function excluir(){
        $sql="DELETE FROM comentario WHERE id=".$this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }

}