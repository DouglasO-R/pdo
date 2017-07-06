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
    </tr>
    <?php endforeach;?>
 </table>
</form>