<?php
session_start();
include("conexao.php");
if(isset($_POST['email']) && isset($_POST['senha'])){
$email = $mysqli->real_escape_string($_POST['email']);
$senha = $mysqli->real_escape_string($_POST['senha']);
$sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$sql_query = $mysqli->query($sql_code) or die('falha na execução do código MySQL');
$quantidade = $sql_query->num_rows;
if($quantidade == 1){
$usuario = $sql_query->fetch_assoc();
$_SESSION['id'] = $usuario['id'];
$_SESSION['nome'] = $usuario['nome'];
header("Location: pagina2.php");
exit();
}else{
echo '<script>alert("Falha ao logar, seu email ou senha estão incorretos!"); window.location.href = "index.html";</script>';
exit();
}
}else{
echo '<script>alert("Por favor, preencha todos os campos!"); window.location.href = "index.html";</script>';
exit();
}
?>