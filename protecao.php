<?php

if(!isset($_SESSION['id'])){
    echo "<script>alert('Você não pode acessar essa página, porque não está logado!'); window.location.href = 'index.html';</script>";
    exit();
}
?>