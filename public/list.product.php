<form action="index.php" method="post">

 <table>
    <tr>
        <td>ID</td>
        <td>Nome</td>
        <td>Descrição</td>
    </tr>
    <?php foreach($list as $produto): ?>
    <tr>
        <td><?=$produto['id'] ?></td>
        <td><?=$produto['nome'] ?></td>
        <td><?=$produto['descricao'] ?></td>
    <td>
        <form action="delete.php" method="post">
            <input type="hidden" name="id" value="<?=$produto['id']?>" />
            <button > remover </button>
        </form>   
     </td>         
        <td><button ><a href="formulario-atualiza.php?id=<?=$produto['id']?>">Update</a> </button> </td>
    </tr>
    <?php endforeach;?>
 </table>
</form>