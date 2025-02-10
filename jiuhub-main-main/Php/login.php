<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="..\style\login.css"> <!-- Vinculando o CSS externo -->
</head>
<body>
    <div class="container">
        <div class="header">
            <!-- Se necessário, adicione título ou logo aqui -->
        </div>
        <div class="login-form">
            <div class="icon">
                <img src="../img/user.png" alt="User Icon"> <!-- Substitua por um ícone de usuário -->
            </div>
            <form action="login.php" method="POST">
                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email" placeholder="Informe seu email" required>

                <label for="password">SENHA:</label>
                <input type="password" id="password" name="password" placeholder="Informe sua senha" required>

                <div class="options">
                    <input type="checkbox" id="remember" name="remember">
                    <label class="lembre" for="remember">Lembre-me</label>
                    <a href="recuperar_senha.php" class="forgot-password">Esqueceu sua senha?</a>
                </div>

                <button type="submit" nclick="window.location.href='login.php'">ENTRAR</button>

                <!-- Texto "OU" entre os botões -->
                <div class="or-section">
                    <span>OU</span>
                </div>

                <button type="button" class="google-login">
                    <img src="../img/google.png" alt="Google Icon" class="google-icon"> <!-- Atualizado para 'google.png' -->
                    Conecte-se com o Google
                </button>
                
                <!-- Link para redirecionar à página de cadastro -->
                <div class="signup-link">
                    <a href="cadastro.php">Ainda não tem uma conta? Cadastre-se</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
