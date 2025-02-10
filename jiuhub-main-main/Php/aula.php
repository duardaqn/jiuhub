<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="..\style\aula.css"> <!-- CSS específico -->
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
        <h2>Agendar Aula</h2>
            <form action="teladeinicio.php" method="POST">
            <label for="faixa">SELECIONAR A TURMA:</label>
                <select id="turma" name="turma" required>
                    <option value="">Selecione</option>
                    <option value="branca">KIDS</option>
                    <option value="azul">ABERTO</option>
                </select>
                <label for="date">DATA DAS AULA:</label>
                <input type="date" id="date" name="date" required>
                <label for="time">HORÁRIO DAS AULA:</label>
                <input type="time" id="time" name="time" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
