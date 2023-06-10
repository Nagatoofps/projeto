<?php
session_start();

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST['cpf'];

    $sql_check = "SELECT * FROM usuarios WHERE email = '$email'";
    $check_result = $mysqli->query($sql_check);
    
    if ($check_result->num_rows > 0) {
        echo "<script>alert('E-mail já cadastrado. Por favor, tente novamente.');</script>";
        header("Location: pagina2.php");
        exit();
    }
    
    $sql_code = "INSERT INTO usuarios (nome, email, senha, cpf) VALUES ('$nome', '$email', '$senha', '$cpf')";
    $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código MySQL: ' . $mysqli->error);

    if ($sql_query) {
    $_SESSION['id'] = $mysqli->insert_id; 
    $_SESSION['nome'] = $nome; 
    echo "<script>alert('Cadastro foi realizado!'); window.location.href = 'pagina2.php';</script>";
    exit();
} else {
    echo "<script>alert('Falha ao cadastrar!');</script>";
}
}
?>
