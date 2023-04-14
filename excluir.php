<?php require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if ($id && isset($_POST['confirm'])) {
    $sql = $pdo->prepare("DELETE FROM usuario WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Excluir usuário</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

    <h2>Excluir usuário</h2>

    <p>Você tem certeza que deseja excluir este usuário?</p>

    <form method="post">
        <input type="submit" name="confirm" value="Sim, excluir">
        <a href="index.php">Não, voltar</a>
    </form>

</body>
</html>
