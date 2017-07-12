<?php
namespace Source;

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

header("Location: index.php");

$update = $container['service']->update();

