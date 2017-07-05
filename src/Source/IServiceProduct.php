<?php
namespace Source;

interface IServiceProduct{

	public function listar();
	public function insert();
	public function update();
	public function delete($id);
	public function find($id);
}