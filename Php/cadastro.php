<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="..\style\cadastro.css"> <!-- Vinculando o CSS externo -->
</head>
<body>
<form method="post" action="?page=clienteControle">
   
    <div class="container">
        <div class="header">
            <!-- Pode adicionar algo aqui como título ou logo -->
        </div>
        <div class="login-form">
            <div class="icon">
                <img src="../img/user.png" alt="User Icon"> <!-- Substitua por um ícone de usuário -->
          
            </div>
            <form action="editar.php" method="POST">
                <label for="email">EMAIL:</label>
                <input type="email" id="inputEmail4" placeholder="Informe seu email" name="email" value=""required>

                <label for="phone">TELEFONE:</label>
                <input type="tel" id="inputphone4" placeholder="Ifirme seu telefone" name="telefone" value=""required>

                <label for="username">NOME DE USUÁRIO:</label>
                <input type="text" id="inputusarname4" placeholder="nome de usuário" name="username" value=""required>

                <label for="password">SENHA:</label>
                <input type="password" id="inputpassword4" placeholder="Informe sua senha" name="password" value=""required>

                <button value="<?php echo $acao?>" name="acao" type="submit" action="telainicio.php">CADASTRAR</button>
                <div class="or-container">
                    <span>OU</span>
                </div>

                <!-- Botão de Cadastro com Google, com imagem -->
                <button type="button" class="google-login">
                    <img src="../img/google.png" alt="Google Icon" class="google-icon"> <!-- Atualizado para 'google.png' -->
                    Cadastre-se com o Google
                </button>
            </form>
        </div>
    </div>
</body>
</html>
