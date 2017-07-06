<?php

namespace Source;

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";




$list = $container['service']->listar();
$container['product']->setId("9")->setNome("livro PHP")->setDescricao("livro de php oo");
//$insere = $container['service']->insert();

require_once "list.product.php";

