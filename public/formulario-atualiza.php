<?php
namespace Source;

require_once "../vendor/autoload.php";
require_once "config.php";
require_once "service.php";

$id = $_GET['id'];
$produto = $container['service']->find($id);
?>
<form action="update.php" method="post">
 <table>
    <tr>
        <td>Nome</td>
        <td>Descrição</td>
    </tr>    
    <tr>
    	<td><input type="hidden" name="id" value="<?= $produto['id']?>" /></td>
        <td><input type="text" name="nome" value="<?= $produto['nome']?>" /></td>
        <td><input type="text" name="descricao" value="<?= $produto['descricao']?>" /></td>
        <td><input type="submit" value="Atualizar"></td>        
    </tr>
 </table>
</form>