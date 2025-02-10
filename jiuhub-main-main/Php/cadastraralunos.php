<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="..\style\cadastraralunos.css"> <!-- CSS específico -->
    <script>
        // Função para alternar o menu ao clicar
        function toggleMenu() {
            const menu = document.getElementById("dropdownMenu");
            menu.classList.toggle("show");
        }
    </script>
</head>
<body>
    <header>
        <!-- Botão de menu no lado esquerdo -->
        <button id="menuButton" onclick="toggleMenu()">☰</button>
        
        <!-- Logo centralizada -->
        <div class="logo">
            <a href="teladeinicio.php"><img src="../img/logo.png" alt="Logo Jiu-Hub"></a> <!-- Substitua pela sua logo -->
        </div>
        
        <!-- Ícones de usuário no lado direito -->
        <div class="user-options">
            <a href="notificacoes.php"><img src="../img/noti.png" alt="Notificações"></a>
            <a href="perfil.php"><img src="../img/user.png" alt="Perfil"></a>
        </div>
    </header>

    <!-- Menu dropdown -->
    <div id="dropdownMenu" class="dropdown">
        <ul>
            <li><a href="cadastraralunos.php">Cadastrar Alunos</a></li>
            <li><a href="turma.php">Turmas</a></li>
            <li><a href="aula.php">Agendar Aula</a></li>
            <li><a href="aluno.php">Alunos</a></li>
        </ul>
    </div>

    <div class="container">
        <div class="header">
        </div>
        <div class="login-form">
        <h2>Cadastro de Alunos</h2>
            <form action="cadastro.php" method="POST">
                <label for="username">NOME COMPLETO:</label>
                <input type="text" id="username" name="username" placeholder="Informe o nome completo" required>

                <label for="date">DATA DE NASCIMENTO:</label>
                <input type="date" id="date" name="date" required>

                <label for="phone">TELEFONE:</label>
                <input type="tel" id="phone" name="phone" placeholder="Informe seu telefone" required>

                <label for="email">EMAIL:</label>
                <input type="email" id="email" name="email" placeholder="Informe o email" required>

                <label for="address">ENDEREÇO:</label>
                <input type="text" id="address" name="address" placeholder="Informe o endereço" required>

                <label for="matricula">MATRÍCULA:</label>
                <input type="text" id="matricula" name="matricula" placeholder="Informe a matrícula">

                <label for="faixa">FAIXA:</label>
                <select id="faixa" name="faixa" required>
                    <option value="">Selecione</option>
                    <option value="branca">Branca</option>
                    <option value="azul">Azul</option>
                    <option value="roxa">Roxa</option>
                    <option value="marrom">Marrom</option>
                    <option value="preta">Preta</option>
                </select>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
