<?php
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dia = $mysqli->real_escape_string($_POST['dia']);

    $sql_code = "SELECT * FROM aulas WHERE dia = '$dia'";
    $sql_query = $mysqli->query($sql_code) or die('Falha na execução do código MySQL: ' . $mysqli->error);

    if ($sql_query->num_rows > 0) {
        $results = '';

        while ($registro = $sql_query->fetch_assoc()) {
            $results .= "Dia: " . $registro['dia'] . "\n";
            $results .= "Professor: " . $registro['professor'] . "\n";
            $results .= "Horário: " . $registro['horario'] . "\n";
            $results .= "Aula: " . $registro['aula'] . "\n\n";
        }

        echo $results;
    } else {
        echo "";
    }
}
?>






