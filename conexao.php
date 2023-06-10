<?php
$usuario = "sql10624217";
$senha ="ksLlWBQb7q";
$host = "sql10.freemysqlhosting.net";
$database ="sql10624217";

$mysqli = new mysqli($host, $usuario, $senha, $database);
if ($mysqli->error){
    die("Falja ao conectar com o banco de dados:". $mysqli->error);
}
?>