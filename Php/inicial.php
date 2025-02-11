<?php
session_start(); // Inicia a sessão para controle de login

// Verifica se o usuário já está logado
if (isset($_SESSION['usuario'])) {
    header("Location: painel.php"); // Redireciona para o painel de controle se já estiver logado
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jiu-Hub</title>
    <!-- Link para o arquivo CSS externo -->
    <link rel="stylesheet" href="..\style\inicial.css">
</head>
<body>

    <!-- Conteúdo principal -->
    <div class="logo-container">
        <!-- Substitua pela URL do logo -->
        <img src="../img/logo.png" alt="Logo Jiu-Hub">
    </div>

    <!-- Botão de entrar -->
    <button class="btn-entrar" onclick="window.location.href='login.php'">Entrar</button>

</body>
</html>
