<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$database = "agenda"; 

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}
echo "Conexão com o banco de dados realizada com sucesso!";


$sql = "SELECT nome, email FROM contatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Lista de Contatos:\n";
    while ($row = $result->fetch_assoc()) {
        echo "Nome: " . $row["nome"] . " - E-mail: " . $row["email"] . "\n";
    }
} else {
    echo "Nenhum contato encontrado.";
}

$conn->close();