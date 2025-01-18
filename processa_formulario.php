<?php
include('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtenha os dados do formulário
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $idade = $_POST['idade'];

    try {
        // Prepare a consulta SQL com parâmetros (prepared statement)
        $sql = "INSERT INTO pessoas_info (nome, sobrenome, idade) VALUES (:nome, :sobrenome, :idade)";
        $stmt = $conn->prepare($sql);

        // Vincule os parâmetros
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':sobrenome', $sobrenome);
        $stmt->bindParam(':idade', $idade, PDO::PARAM_INT); // Especificando que a idade é um inteiro

        // Execute a consulta
        $stmt->execute();

        echo "Novo registro inserido com sucesso!";
    } catch (PDOException $e) {
        echo "Erro ao inserir o registro: " . $e->getMessage();
    }
}

?>
