<?php
session_start(); 

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header("Location: index.php"); 
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Painel</title>
</head>

<body>
    <h2>Bem-vindo(a) ao Painel!</h2>
        <?php
            if (isset($_SESSION['nomeUsuario'])) {
                $nome_usuario = $_SESSION['nomeUsuario'];
                echo '<p>Olá, ' . htmlspecialchars($nome_usuario) . '!</p>';
            } else {
                echo '<p>Olá!</p>';
            }
        ?>
    <a href="logout.php">Sair</a>
</body>

</html>