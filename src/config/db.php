<?php
include_once 'config.php';

$db = new mysqli("localhost", "root", "", "sistema_ecomerce", "3306");

if ($db->connect_errno) {
    echo "Erro Banco de dados: {$db->connect_error}";
    exit();
}