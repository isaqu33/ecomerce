<?php
include_once '../config/db.php';

$response = [];

try {
    $query = "UPDATE sistema_ecomerce.produtos SET isCarrinho = 0 WHERE isCarrinho = 1";
    $stmt = $db->prepare($query);
    $stmt->execute();

    $response = [
        'status' => true
    ];
} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage(),
    ];
}

header('Content-Type: application/json');
echo json_encode($response);
?>