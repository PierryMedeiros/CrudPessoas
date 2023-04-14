<?php
require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');

if($id && $nome && $sobrenome){
    $sql = $pdo->prepare("UPDATE usuario SET nome = :nome, sobrenome = :sobrenome WHERE id = :id");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':sobrenome', $sobrenome);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: index.php");
    exit;
}else{
    header("Location: index.php");
    exit;
}