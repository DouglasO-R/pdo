<?php

class ServiceProduct{

	private $db;
	private $product;

	public function __construct(IConn $db,IProduct $product){
		$this->db = $db->connect();
		$this->product = $product;
	}

	public function list(){
		
		$query = "select * from `produtos`";
		$stmt = $this->db->prepare($query);
		$stmt->execute();

		return $stmt->fetchALL(\PDO::FETCH_ASSOC);

	}

	public function insert(){

		$query = " insert into produtos(nome,descricao) values(:nome,:descricao)";
		$stmt = $this->db->prepare($query);
		$stmt->bindValue(":nome",$this->product->getNome());
		$stmt->bindValue(":descricao",$this->product->getDescricao());
		$stmt->execute();
		return $this->db->lastInsertId();
	}

	public function update(){


	}

	public function delete(){


	}
}