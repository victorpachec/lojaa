<?php
    include "cabecalho.php";
?>
<link rel="stylesheet" href="style-cadastrar.css">
<body>
    <div class="container-form">
        <h2>CADASTRO DE PRODUTOS</h2>
        <form action="inserir.php" method="POST">
            <div class="mb-3">
                <input type="text" name="produto" class="form-control" placeholder="Digite o nome do produto" required>
            </div>
            <div class="mb-3">
                <input type="text" name="preco" class="form-control" placeholder="Digite o preço do produto" required>
            </div>
            <div class="mb-3">
                <input type="text" name="estoque" class="form-control" placeholder="Digite a quantidade do produto" required>
            </div>
            <div class="centralizar-botoes">
                <button type="submit" class="btn btn-primary btn-lg shadow rounded-pill">Enviar</button>
                <a href="index.php" class="btn btn-listar btn-lg shadow rounded-pill">Voltar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>