<?php
namespace Source;

interface IProduct{

	public function getId();
    public function setId($id);
    public function getNome();
    public function setNome($nome);
    public function getDescricao();
    public function setDescricao($descricao);
}