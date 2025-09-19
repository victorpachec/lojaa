<?php
    include "cabecalho.php";
    require "conexao.php";

    // Pega o ID passado pela URL
    $id = $_GET['id'];

    // Busca o produto
    $sql = "SELECT * FROM produtos WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id' => $id]);
    $produto = $stmt->fetch(PDO::FETCH_ASSOC);

    // Atualiza o produto quando enviar o formulário
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['produto'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['estoque'];

        $sql = "UPDATE produtos SET nome = :nome, preco = :preco, quantidade = :quantidade WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            'nome' => $nome,
            'preco' => $preco,
            'quantidade' => $quantidade,
            'id' => $id
        ]);

        header("Location: listar.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Produto</title>
    <link rel="stylesheet" href="style-atualizar.css"> <!-- CSS marrom -->
</head>
<body>
    <div class="container">
        <h2>ATUALIZAR PRODUTO</h2>

        <form action="" method="POST">
            <div class="mb-3">
                Nome:
                <input value="<?= htmlspecialchars($produto['nome']) ?>" 
                       type="text" name="produto" class="form-control" required>
            </div>
            <div class="mb-3">
                Preço:
                <input value="<?= htmlspecialchars($produto['preco']) ?>" 
                       type="text" name="preco" class="form-control" required>
            </div>
            <div class="mb-3">
                Quantidade:
                <input value="<?= htmlspecialchars($produto['quantidade']) ?>" 
                       type="number" name="estoque" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="listar.php" class="btn btn-danger">Voltar</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
