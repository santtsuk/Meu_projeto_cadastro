<?php

/* Definindo as variáveis de conexão */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "produtos_db";

/* Criar a Conexão */
$CONN = mysqli_connect($servername, $username, $password, $dbname);

/* Verificar Conexão */
if (!$CONN) {
    die("Conexão falhou: " . $sconn->connect_error());
}
