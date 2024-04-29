<?php
$servername = "localhost";
$username = "root";
$password = "Mortex01!";
$database = "my_database";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
?>
