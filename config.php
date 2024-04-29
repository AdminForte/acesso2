<?php

$servername = "localhost";
$username = "root"; 
$password = "Mortex01!"; 
$dbname = "formulariofortetrator"; 

// Tentativa de conexão com o banco de dados usando PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Definir o modo de erro do PDO como exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Conexão bem-sucedida";
} catch(PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}
?>
