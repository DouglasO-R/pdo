<?php
namespace Source;

use Pimple\Container;

$container = new Container;


$container['host'] = isset($_ENV["DATABASE_TESTHOST"]) ? $_ENV["DATABASE_TESTHOST"] : $_ENV["DATABASE_HOST"];
$container['dbname'] = isset($_ENV["DATABASE_TESTDBNAME"]) ? $_ENV["DATABASE_TESTDBNAME"] : "";
$container['user'] = isset($_ENV["DATABASE_TESTDBUSER"]) ? $_ENV["DATABASE_TESTDBUSER"] : $_ENV["DATABASE_USER"];
$container['pass'] = isset($_ENV["DATABASE_TESTDBPASS"]) ? $_ENV["DATABASE_TESTDBPASS"] : $_ENV["DATABASE_PASS"];

