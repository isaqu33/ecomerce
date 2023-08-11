<?php
include_once '../config/db.php';

$response = [];

try {

    $dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    // if ($dados) {

    //     throw new Exception("$dados");
    //     # code...
    // }

    // Verifica se o campo de email enviado via método POST está vazio. Se estiver vazio, lança uma exceção com a mensagem "Informe o email"  
    if (empty($_POST['email'])) {
        throw new Exception("Informe o email hjbdhgjsdfhgvsdfhg");
    }

    if (empty($_POST['senha'])) {
        throw new Exception("Informe a senha");
    }
    // Define uma consulta SQL que seleciona todos os campos da tabela "users" onde o email corresponde ao valor do parâmetro ?. O limit 1 é usado para retornar apenas um resultado.
    $query = "select * from usuarios where email = ? limit 1";
    // Prepara a consulta SQL para execução, usando a conexão com o banco de dados representada pela variável $db.  
    $stmt = $db->prepare($query);
    // Vincula o valor do parâmetro ? na consulta SQL com o valor do campo de email enviado via método POST. O tipo de dado 's' indica que o valor é uma string.
    $stmt->bind_param('s', $_POST['email']);
    // Executa a consulta SQL preparada.
    $stmt->execute();

    // Obtém o resultado da consulta SQL como um objeto mysqli_result.
    $result = $stmt->get_result();


    // Verifica se o número de linhas retornadas pelo resultado da consulta é igual a zero. Se for zero, significa que o email não existe na tabela "users". Nesse caso, lança uma exceção com a mensagem "Email não existe".
    if ($result->num_rows == 0) {
        throw new Exception("Email não existe");
    }

    // Obtém o próximo registro do resultado da consulta como um objeto.
    $user = $result->fetch_object();


    // Verifica se a senha fornecida via método POST corresponde à senha armazenada no banco de dados. A função password_verify é usada para comparar a senha fornecida com a senha hash armazenada no banco de dados. Se as senhas não corresponderem, lança uma exceção com a mensagem "Senha incorreta".
    if (md5($_POST['senha']) !== $user->senha) {
        throw new Exception("Senha incorreta");
    }

    $_SESSION['userLogged'] = true;
    $_SESSION['userId'] = $user->id;
    $_SESSION['userName'] = $user->name;

    // header("Location: http://localhost/ecomerce/src/pages/home/");

    $response = [
        'status' => true,
        "user" => $user,
            
        // "nameUser" => $user->name
    ];
} catch (Exception $ex) {
    $response = [
        'status' => false,
        'message' => $ex->getMessage(),
    ];
}

echo json_encode($response);





// $result = $stmt->get_result();: 

// if($result->num_rows == 0){ throw new Exception("Email não existe"); }: 

// $user = $result->fetch_object();: 

// if(!password_verify($_POST['password'], $user->password)){ throw new Exception("Senha incorreta"); }: 

// $_SESSION['userLogged'] = true;: Define a variável de sessão userLogged como verdadeira para indicar que o usuário está autenticado.

// $_SESSION['userId'] = $user->id;: Armazena o ID do usuário na variável de sessão userId.

// `$_SESSION['userName'] = $