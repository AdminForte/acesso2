<?php

// Verifica se a requisição é do tipo POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Captura os dados enviados pelo formulário
    $type = $_POST["type"];
    $description = $_POST["description"];
    $amount = $_POST["amount"];

    // Aqui você pode adicionar o código para salvar os dados no banco de dados ou em outro local

    // Retorna uma resposta em formato JSON
    echo json_encode([
        "success" => true,
        "message" => "Transação salva com sucesso."
    ]);
} else {
    // Retorna uma resposta de erro se a requisição não for do tipo POST
    http_response_code(405);
    echo json_encode([
        "success" => false,
        "message" => "Método não permitido. Esta página aceita apenas requisições POST."
    ]);
}
