<?php

require_once "IConn.php";
require_once "Conn.php";
require_once "IProduct.php";
require_once "Product.php";
require_once "IServiceProduct.php";
require_once "ServiceProduct.php";
require_once "Conteiner.php";

$db = new Conn("localhost","test","root","");
$product = new Product;


$product->setId("8")->setNome("caderno atualizado")->setDescricao("caderno atualizado com update");


$service = new ServiceProduct($db,$product);


print_r($service->listar());

