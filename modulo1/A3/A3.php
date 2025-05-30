/*http://localhost/programacao-PHP/modulo1/A3/index*/
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['usuario']) && isset($_POST['senha'])) {
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            echo "<h2>Dados de Login Recebidos:</h2>";
            echo "Usuário: " . htmlspecialchars($usuario) . "<br>";
            echo "Senha: " . htmlspecialchars($senha) . "<br>";
        } else {
            echo "<p style='color:red;'>Por favor, preencha os campos usuário e senha.</p>";
        }
    } else {
        echo "<p>Este script só aceita requisições via POST.</p>";
    }
?>