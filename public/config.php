<?php
namespace Source;

use Pimple\Container;

$container = new Container;

$container['host'] => $_ENV["DATABASE_TESTHOST"];
$container['dbname'] => $_ENV["DATABASE_TESTDBNAME"];
$container['user'] => $_ENV["DATABASE_TESTDBUSER"];
$container['pass'] => $_ENV["DATABASE_TESTDBPASS"];