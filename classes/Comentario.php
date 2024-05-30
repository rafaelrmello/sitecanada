<?php
class Comentario{
    public $id;
    public $email;
    public $comentario;
    public $status;

    public function __construct($id = false)
	{
		if ($id){
            $this->id = $id;                
            $this->carregar();
        }
	}
    
    public function carregar(){
        $sql="SELECT * FROM comentario WHERE id=".$this->id;
        include "classes/conexao.php";
        $resultado= $conexao->query($sql);
        $linha=$resultado->fetch(); 

        $this->id=$linha['id'];
        $this->pergunta=$linha['email'];
        $this->resposta=$linha['comentario'];
    }

    public function listar(){
        $sql="";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }

    public function listarAprovados(){
        $sql="";

        include "classes/conexao.php";

        $resultado=$conexao->query($sql);

        $lista=$resultado->fetchAll();

        return $lista;
    }

    
    public function excluir(){
        $sql="DELETE FROM pergunta WHERE id=".$this->id;
        include "classes/conexao.php";
        $conexao->exec($sql);
    }


    public function aprovar() {

        $sql = ";
        include "classes/conexao.php";
        $conexao->exec($sql);
    }
}