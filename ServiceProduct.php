<?php

class ServiceProduct{

	private $db;
	private $product;

	public function __construct(IConn $db,IProduct $product){
		$this->db = $db->connect();
		$this->product = $product;
	}





	public function listar(){

		try{
			$query = "select * from produtos";

			$stmt = $this->db->prepare($query);
			
			$stmt->execute(); 

			return $stmt->fetchALL();

		}catch(\PDOException $e){

       		 echo"Erro! Mensagem:".$e->getMessage()." ,Codigo ".$e->getCode();
        }
	}

	public function insert(){
		try{
		$query = " insert into produtos(nome,descricao) values(:nome,:descricao)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":nome",$this->product->getNome());
		$stmt->bindValue(":descricao",$this->product->getDescricao());
		$stmt->execute();
		return $this->db->lastInsertId();

		}catch(\PDOException $e){

        echo"Erro! Mensagem:".$e->getMessage()." ,Codigo ".$e->getCode();
        }
	}

	public function update(){

		try{
			$query = "update produtos set `nome`=?,`descricao`=? where `id`=?";

			$stmt = $this->db->prepare($query);

			$stmt->bindValue(1,$this->product->getNome());
		    $stmt->bindValue(2,$this->product->getDescricao());
		    $stmt->bindValue(3,$this->product->getId());
			
			$return = $stmt->execute(); 

			return $return;

		}catch(\PDOException $e){

       		 echo"Erro! Mensagem:".$e->getMessage()." ,Codigo ".$e->getCode();
        }

	}

	public function delete($id){

		try{
			$query = "delete from produtos where `id`=?";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(1,$id);
			
			$return = $stmt->execute(); 

			return $return;

		}catch(\PDOException $e){

       		 echo"Erro! Mensagem:".$e->getMessage()." ,Codigo ".$e->getCode();
        }

	}
	public function find($id){

		try{
			$query = "select * from produtos where id=:id";

			$stmt = $this->db->prepare($query);
			$stmt->bindValue(":id",$id);
			
			$stmt->execute(); 

			return $stmt->fetch(\PDO::FETCH_ASSOC);

		}catch(\PDOException $e){

			echo"Erro! Mensagem:".$e->getMessage()." ,Codigo ".$e->getCode();
		}
	}


}