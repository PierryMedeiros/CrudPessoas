<?php
require 'config.php';

$lista= [];
$sql = $pdo->query("SELECT * FROM usuario");
if($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>
<link rel="stylesheet" href="index.css">
<h1>Listagem de pessoas</h1>;

<table border="1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Sobrenome</th>
        <th>Ações</th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td><?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['sobrenome'];?></td>
            <td>
                <a href="editar.php?id=<?=$usuario['id'];?>">[ editar ]</a>
                <a href="excluir.php?id=<?=$usuario['id'];?>">[ excluir ]</a>
            </td>
        </tr>
    <?php endforeach; ?> 
</table>

<a id="cadastrar" href="cadastrar.php">Cadastrar Usuário</a>