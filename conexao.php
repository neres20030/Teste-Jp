<?php
$host = 'localhost'; // ou o endereço do seu servidor MariaDB
$usuario = 'Joao';   // O usuário do MariaDB
$senha = '240305Jp@';         // Senha do usuário
$database = 'pessoas'; // Nome do banco de dados

try {
    // Conexão PDO com MariaDB
    $conn = new PDO("mysql:host=$host;dbname=$database", $usuario, $senha);
    
    // Configurar o modo de erro do PDO para exceção
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexão bem-sucedida com MariaDB!";
} catch (PDOException $e) {
    echo "Falha na conexão: " . $e->getMessage();
}
?>
