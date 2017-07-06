<?php
namespace Source;

use Pimple\Container;

$container = new Container;

$container['host'] = "localhost";
$container['dbname'] = "test";
$container['user'] = "root";
$container['pass'] = "";