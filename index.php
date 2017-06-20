<?php

try{

$conn = new \PDO("mysql:host=localhost;dbname=test","root","");
$query = "select * from produtos where id = {$_GET['id']}";
//$query = "insert into produtos(nome,descricao) values('caneta','caneta nova')";
foreach ($conn->query($query) as $produto) {
	echo $produto['id'];
	echo "<br>";
	echo $produto['nome'];
	echo "<br>";
	echo $produto['descricao'];
	echo "<br>";
}


}catch(\PDOException $e){
	echo "Error! Message: ".$e->getMessage()." Code: ".$e->getCode();
}