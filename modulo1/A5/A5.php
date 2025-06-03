<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['usuario']) && isset($_POST['senha'])) {
        $_SESSION["nomeUsuario"] = $_POST['usuario'];
        $_SESSION["senha"] = $_POST['senha'];
        if ($_SESSION["nomeUsuario"] == "admin" && $_SESSION["senha"] == "123"){
            $_SESSION["logado"] = true;
            header("Location: painel.php");
            exit();
        }else {
            echo "Usuário ou senha inválidos.";
        }
    }
}
