<?php 
session_start();

include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_SESSION['id']; 
    $senhaantiga = $_POST['senhaantiga'];
    $senhanova = $_POST['senhanova'];

    
    $sql_check = "SELECT * FROM usuarios WHERE id = '$id' AND senha = '$senhaantiga'";
    $check_result = $mysqli->query($sql_check);
    
    if ($check_result->num_rows == 1) {
        
        $sql_update = "UPDATE usuarios SET senha = '$senhanova' WHERE id = '$id'";
        $update_query = $mysqli->query($sql_update);
        
        if ($update_query) {
            echo "<script>alert('Senha redefinida com sucesso'); window.location.href = 'pagina2.php';</script>";
            exit();
        } else {
            echo "<script>alert('Falha ao redefinir a senha');</script>";
        }
    } else {
        echo "<script>alert('Senha antiga incorreta'); window.location.href = 'pagina2.php';</script>";
        exit();
    }
}
?>
