<?php
include_once '../config/db.php';

$response = [];

try {

    $comentario = $_POST['id'];
    // $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if (empty($comentario)) {
        throw new Exception("Informe um tipo");
    }

    $query = "DELETE FROM sistema_ecomerce.COMENTARIOS WHERE id_user = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $comentario);
    $stmt->execute();

    $response = [
        'status' => true,
        $stmt
    ];
} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage()
    ];
}

header('Content-Type: application/json');
echo json_encode($response);