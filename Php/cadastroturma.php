<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="..\style\cadastroturma.css"> <!-- CSS específico -->
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
        <h2>Cadastro de Turma</h2>
            <form action="cadastro.php" method="POST">
                <label for="username">NOME DA TURMA:</label>
                <input type="text" id="username" name="username" placeholder="Informe o nome completo" required>

                <label for="date">DATA DAS AULAS:</label>
                <input type="date" id="date" name="date" required>

                <label for="time">HORÁRIO DAS AULAS:</label>
                <input type="time" id="time" name="time" required>

                <label for="name">PERIODO SEMESTRE:</label>
                <input type="text" id="name" name="name" placeholder="Informe o semestre" required>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
