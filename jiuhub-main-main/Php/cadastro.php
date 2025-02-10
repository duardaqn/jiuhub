<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="..\style\cadastro.css"> <!-- Vinculando o CSS externo -->
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Pode adicionar algo aqui como título ou logo -->
        </div>
        <div class="login-form">
            <div class="icon">
                <img src="../img/user.png" alt="User Icon"> <!-- Substitua por um ícone de usuário -->
            </div>
            <form action="cadastro.php" method="POST">
                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email" placeholder="Informe seu email" required>

                <label for="phone">TELEFONE:</label>
                <input type="tel" id="phone" name="phone" placeholder="Informe seu telefone" required>

                <label for="username">NOME DE USUÁRIO:</label>
                <input type="text" id="username" name="username" placeholder="Escolha seu nome de usuário" required>

                <label for="password">SENHA:</label>
                <input type="password" id="password" name="password" placeholder="Escolha sua senha" required>

                <label for="confirm_password">CONFIRMAR SENHA:</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme sua senha" required>

                <button action="teladeinicio.php" type="submit">CADASTRAR</button>

                <!-- Adicionando "ou" entre os botões -->
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
