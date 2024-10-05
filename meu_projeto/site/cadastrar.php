<!DOCTYPE html>
<html lang="PT_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <link rel="stylesheet" href="_styles/styles.css">
</head>

<body>

    <form action="salvar.php" method="post">
        Nome: <input type="text" name="nome"> required<br>
        Preço de Compra: <input type="text" name="preco_compra"> required<br>
        Preço de Venda: <input type="text" name="preco_venda"> required<br>
        Codigo do Produto: <input type="text" name="codigo"> required<br>
        Nome do Fornecedor: <input type="text" name="fornecedor"> required<br>
        <input type="submit" value="Cadastrar Produto">
    </form>

</body>

</html>