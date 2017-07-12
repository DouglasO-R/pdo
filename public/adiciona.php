<?php
namespace Source;
header("Location: index.php");


require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$insere = $container['service']->insert();