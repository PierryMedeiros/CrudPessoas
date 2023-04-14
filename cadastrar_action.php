<?php
require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$sobrenome = filter_input(INPUT_POST, 'sobrenome');

$sql = $pdo->prepare("INSERT INTO usuario (nome, sobrenome) VALUES (:nome, :sobrenome)");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':sobrenome', $sobrenome);
$sql->execute();

header("Location: index.php");