<?php

namespace Source;

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$list = $container['service']->listar();

if($_POST){
 
}else{}

require_once "list.product.php";

//