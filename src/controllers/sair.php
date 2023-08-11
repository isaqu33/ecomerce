<?php
// Inicie a sessão
session_start();

// Limpe todas as variáveis de sessão
$_SESSION = array();

// Destrua a sessão
session_destroy();

// Redirecione o usuário para a tela de login
header("Location: http://localhost/ecomerce/src/pages/login/");
exit();
?>