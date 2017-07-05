<?php

namespace Source;

require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container;

$container['db'] = function(){
	return new \Source\Conn("localhost","test","root","");
};

$container['product'] = function(){

	return new \Source\Product;
};

$container['service'] = function($c){
	return new \Source\ServiceProduct($c['db'],$c['product']);
};

$list = $container['service']->listar();

print_r($list);
/*
$db = new Conn("localhost","test","root","");
$product = new Product;


$product->setId("8")->setNome("caderno atualizado")->setDescricao("caderno atualizado com update");


$service = new ServiceProduct($db,$product);


print_r($service->listar());
*/
