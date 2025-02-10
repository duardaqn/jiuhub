<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Dados</title>
    <link rel="stylesheet" href="../style/alterar.css">
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Alterar Dados</h2>
            <div class="profile-pic">
                <img src="../img/images.png" alt="Foto do Usuário"> <!-- Substitua pela imagem real -->
            </div>

            <form action="salvar_dados.php" method="POST">
                <label for="email">E-MAIL:</label>
                <input type="email" id="email" name="email" required>

                <label for="telefone">TELEFONE:</label>
                <input type="text" id="telefone" name="telefone"  required>

                <label for="usuario">NOME DE USUÁRIO:</label>
                <input type="text" id="usuario" name="usuario"  required>

                <label for="senha">SENHA:</label>
                <input type="password" id="senha" name="senha" required>

                <div class="botoes">
                    <button type="button" onclick="history.back()">Voltar</button>
                    <button type="submit">Salvar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>