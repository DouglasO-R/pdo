<?php
namespace Source;

$container['db'] = function($c){
	return new \Source\Conn($c['host'],$c['dbname'],$c['user'],$c['pass']);
};

$container['product'] = function(){

	return new \Source\Product;
};

$container['service'] = function($c){
	return new \Source\ServiceProduct($c['db'],$c['product']);
};