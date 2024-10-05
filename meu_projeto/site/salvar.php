<?php

/* Incluindo o arquivo db.php */
include 'db.php';

/* Recebendo os dados */
$nome = $_POST['nome'];
$preco_compra = $_POST['preco_compra'];
$preco_venda = $_POST['preco_venda'];
$codigo = $_POST['codigo'];
$fornecedor = $_POST['fornecedor'];

/* Criando o QUERY do SQL */
$sql = "INSERT INTO produto(nome, preco_compra, preco_venda, codigo, fornecedor) 
VALUES ('$nome', '$preco_compra', '$preco_venda', '$codigo', '$fornecedor')";

/* Executando o comando SQL */
if ($CONN->query($sql) === TRUE) {
    echo "Cadastrado com sucesso";
} else {
    echo "Conexão falhou: " . $sql . "<br>" . $CONN->error;
}

/* Fechando a Conexão */
$CONN->close();

?>