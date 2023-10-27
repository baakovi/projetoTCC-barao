<?php
// Conecte-se ao banco de dados usando database.php

// Consulta para selecionar todas as imagens
$query = "SELECT * FROM imagens";
// Execute a consulta SQL e obtenha os resultados usando PHP PDO ou MySQLi

// Exiba as imagens na galeria
foreach ($resultados as $row) {
    $nome_arquivo = $row["nome_arquivo"];
    $descricao = $row["descricao"];
    echo "<img src='imagens/$nome_arquivo' alt='$descricao'>";
}
?>
