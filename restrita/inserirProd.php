<?php
    session_start();
    include 'conecta.php';

    $nome = $_POST['nomeProduto'];
    $preco = $_POST['precoProduto'];

    $consulta = $conexao -> prepare("INSERT INTO produtos (nome,preco) VALUES ('$nome','$preco')");

    $consulta -> execute();

    header('Location: index.php');

?>