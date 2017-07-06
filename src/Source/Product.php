<?php
namespace Source;

class Product implements IProduct{

	private $id;
	private $nome;
	private $descricao;

	public function getId(){

        return $this->id;
    }
    public function setId($id){

        $this->id = $id;
        return $this;
    }

    public function getNome(){

        return $this->nome;
    }
    public function setNome($nome){

        $this->nome = $nome;
        return $this;
    }

    public function getDescricao(){

        return $this->descricao;
    }
    public function setDescricao($descricao){

        $this->descricao = $descricao;
        return $this;
    }
}

/*
class Person
{
    private $personName = array();
    
    public function setPrefix($prefix)
    {
        $this->personName['prefix'] = $prefix;
    }
    
    public function getPrefix()
    {
        return $this->personName['prefix'];
    }
    
    public function setGivenName($gn)
    {
        $this->personName['givenName'] = $gn;
    }
    
    public function getGivenName()
    {
        return $this->personName['givenName'];
    }

*/