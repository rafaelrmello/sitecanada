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

}