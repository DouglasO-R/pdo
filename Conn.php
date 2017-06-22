<?php


class Conn implements IConn{

	private $host;
	private $dbname;
	private $user;
	private $pass;
	
	public function _construct($host,$dbname,$user,$pass){

		$this->host = $host;
		$this->dbname = $dbname;
		$this->user = $user;
		$this->pass = $pass;
	}

	public function conect(){

		try{

		return new \PDO("mysql:host={$this->host};dbname={$this->dbname}","{$this->user}","{$this->pass}");

		

		}catch(\PDOException $e){

		echo "Error! Message: ".$e->getMessage()." Code: ".$e->getCode();
		exit();
		}
	}
}