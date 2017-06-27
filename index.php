<?php

require_once"IConn.php";
require_once"Conn.php";
require_once"IProduct.php";
require_once"Product.php";
require_once"ServiceProduct.php";

$db = new Conn("localhost","test","root","");
$product = new Product;

$product->setNome("caderno")->setDescricao("caderno novo");


$service = new ServiceProduct($db,$product);


print_r($service->list());