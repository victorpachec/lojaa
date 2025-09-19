<?php
    require 'conexao.php';
    $produto = $_POST['produto'];
    $preco = $_POST['preco'];
    $estoque = $_POST['estoque'];

    $sql = "INSERT INTO produtos (nome, preco, quantidade) VALUES (:nome, :preco, :quantidade)";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':nome', $produto);
    $stmt->bindParam(':preco', $preco);
    $stmt->bindParam(':quantidade', $estoque);
    if ($stmt->execute()) {
        echo "Produto inserido com sucesso!";
    } else {
        echo "Erro ao inserir produto.";
    }
?>