<?php
namespace Source;

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

header("Location: index.php");

$id = $_POST['id'];
print_r($id);

$delete = $container['service']->delete($id);


