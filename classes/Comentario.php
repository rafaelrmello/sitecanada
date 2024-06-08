<?php
class Comentario{
    public $id;
    public $email;
    public $comentario;


    public function __construct($id = false)
	{
		if ($id){
            $this->id = $id;                
            $this->carregar();
        }
	}


    public function carregar(){
        $sql="SELECT * FROM comentario WHERE ID_Comentario=".$this->id;
        include "classes/conexao.php";
        $resultado= $conexao->query($sql);
        $linha=$resultado->fetch(); 

        $this->id=$linha['ID_Comentario'];
        $this->email=$linha['email'];
        $this->comentario=$linha['comentario'];
    }
    
    public function comentarioinserir(){
        $sql="INSERT INTO comentario (email, comentario) VALUES ('{$this->email}', '{$this->comentario}')";

        
    include "Classes/conexao.php";
    $conexao->exec($sql);
    echo "Registro gravado com sucesso!";
    }


    public function listar(){
        $sql="SELECT ID_Comentario, email, comentario, status FROM comentario WHERE status = 1";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }

    public function excluir(){
        $sql="DELETE FROM comentario WHERE ID_Comentario=".$this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }



}