<?php

session_start();

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id'];

    
    $sql_delete = "DELETE FROM usuarios WHERE id = '$id'";
    $delete_query = $mysqli->query($sql_delete);

    if ($delete_query) {
        session_destroy();
        echo "<script>alert('Conta excluída permanentemente!'); window.location.href = 'index.html';</script>";
        exit();
    } else {
        echo "<script>alert('Falha ao excluir a conta!');</script>";
    }
}
?>