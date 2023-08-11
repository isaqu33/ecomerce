<?php
include_once '../config/db.php';

$response = [];

try {
    if (empty($_POST['nome'])) {
        throw new Exception("Informe o nome");
    }

    if (empty($_POST['emailcadastro'])) {
        throw new Exception("Informe o email");
    }
    if (empty($_POST['senhacadastro'])) {
        throw new Exception("Informe uma senha");
    }

    // Recupera os dados enviados via POST
    $nome = $_POST['nome'];
    $email = $_POST['emailcadastro'];
    $criacao = $_POST['criacao'];
    $browser = $_POST['Browser'];
    $senha = md5($_POST['senhacadastro']);




    // Insira o código para conectar ao banco de dados aqui
    // ...

    // Crie a consulta SQL para inserir os dados na tabela adequada
    $query = "INSERT INTO sistema_ecomerce.usuarios (nome, email, senha, criacao, Browser) VALUES (?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sssss', $nome, $email, $senha, $criacao, $browser);
    $stmt->execute();




    // Verifica se o registro foi inserido com sucesso
    if ($stmt->affected_rows > 0) {
        $response = [
            'status' => true,
            'message' => 'Cadastro realizado com sucesso!',


        ];
    } else {
        $response = [
            'status' => false,
            'message' => 'Erro ao cadastrar usuário'
        ];
    }
} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage(),
    ];
}

echo json_encode($response);
?>