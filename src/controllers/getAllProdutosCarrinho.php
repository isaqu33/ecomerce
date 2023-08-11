<?php
include_once '../config/db.php';

$response = [];

try {



    // Define uma consulta SQL que seleciona todos os campos da tabela "users" onde o email corresponde ao valor do parâmetro ?. O limit 1 é usado para retornar apenas um resultado.
    $query = "SELECT * FROM sistema_ecomerce.produtos WHERE isCarrinho != 0";
    // Prepara a consulta SQL para execução, usando a conexão com o banco de dados representada pela variável $db.  
    $stmt = $db->prepare($query);
   
    $stmt->execute();

    // Obtém os resultados da consulta como um array associativo
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    $response = [
        'status' => true,
        $result
    ];
} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage(),
    ];
}

echo json_encode($response);