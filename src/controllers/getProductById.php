<?php
include_once '../config/db.php';

$response = [];

try {

    if (empty($_GET['id'])) {
        throw new Exception("Informe um tipo");
    }


    $query = "SELECT * FROM sistema_ecomerce.produtos WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $_GET['id']);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    // $result = $stmt->get_result()->fetch_all();



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

header('Content-Type: application/json');
echo json_encode($response);