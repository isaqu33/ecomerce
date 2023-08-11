<?php
include_once '../config/db.php';

$response = [];

try {

    if (empty($_GET['tipo'])) {
        throw new Exception("Informe um tipo");
    }


    $query = "SELECT * FROM sistema_ecomerce.produtos WHERE categoria = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $_GET['tipo']);
    $stmt->execute();
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