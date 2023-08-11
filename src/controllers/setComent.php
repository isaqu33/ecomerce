<?php
include_once '../config/db.php';

$response = [];

try {
    // Recebe os dados enviados via método POST
    $comentario = $_POST['comentario'];
    $nome = $_POST['nome'];
    $id = $_POST['id'];

    // Verifica se os campos obrigatórios foram fornecidos
    if (empty($comentario)) {
        throw new Exception("Informe o comentário");
    }
    if (empty($nome)) {
        throw new Exception("Informe o nome");
    }
    if (empty($id)) {
        throw new Exception("Informe o ID");
    }

    // Insira os dados no banco de dados
    $query = "INSERT INTO COMENTARIOS (comentario, nome, id_user) VALUES (?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sss', $comentario, $nome, $id);
    $stmt->execute();

    $response = [
        'status' => true,
        'message' => 'Comentário inserido com sucesso'
    ];
} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage()
    ];
}

echo json_encode($response);
?>