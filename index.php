<?php

try{

$conn = new \PDO("mysql:host=localhost;dbname=test","root","");

$query = "select * from produtos where id =:id";
$stmt = $conn->prepare($query);
$stmt->bindValue(':id',$_GET['id']);
$stmt->execute();

print_r($stmt->fetchALL());

}catch(\PDOException $e){
	echo "Error! Message: ".$e->getMessage()." Code: ".$e->getCode();
}