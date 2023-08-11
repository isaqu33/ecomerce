<?php
include_once '../config/db.php';

$response = [];

try {
    if (empty($_POST['id'])) {
        throw new Exception("Informe um tipo");
    }

    $query = "UPDATE sistema_ecomerce.produtos SET isCarrinho = 1 WHERE id = ?";
    $stmt = $db->prepare($query);
    $stmt->bind_param('s', $_POST['id']);
    $stmt->execute();
    
    // Não é necessário usar fetch_all() neste caso, pois estamos atualizando registros, não selecionando-os.
    // Removi a linha abaixo:
    // $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

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