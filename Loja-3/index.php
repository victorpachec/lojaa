<?php
    include "cabecalho.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PRODUTOS</title>

    <!-- Fonte Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="style.css" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>

    <div class="overlay"></div>

    <main class="main-container d-flex flex-column justify-content-center align-items-center text-center">

        <h1 class="title">BEM VINDOS</h1>
        <h2 class="subtitle nome"></h2>

        <div class="centralizar-botoes mt-5">
            <a href="form_cadastrar.php" class="btn btn-cadastrar btn-lg shadow rounded-pill mx-3">Cadastrar Produto</a>
            <a href="listar.php" class="btn btn-listar btn-lg shadow rounded-pill mx-3">Listar Produtos</a>
        </div>

    </main>

    <footer class="footer">
        <p></p>
    </footer>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <!-- Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>

</body>
</html>
