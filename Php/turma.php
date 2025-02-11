<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turma</title>
    <link rel="stylesheet" href="..\style\turma.css"> <!-- CSS específico -->
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

    <!-- Conteúdo principal -->
    <main>
        <!-- Cards -->
        <div class="cards-container">
            <!-- Primeiro card -->
            <a href="alunosturma.php" class="card">
                <div class="card-header">
                    <span class="title">Morimitsu (KIDS)</span>
                    <img src="../img/logo.png" alt="Logo Morimitsu">
                </div>
                <div class="card-body">
                    <p>Horário: 18h - 19h</p>
                </div>
            </a>
            
            <!-- Segundo card -->
            <a href="turma_aberto.php" class="card">
                <div class="card-header">
                    <span class="title">Morimitsu (ABERTO)</span>
                    <img src="../img/logo.png" alt="Logo Morimitsu">
                </div>
                <div class="card-body">
                    <p>Horário: 19h - 20h</p>
                </div>
            </a>
        </div>

        <!-- Botão flutuante -->
        <a href="cadastroturma.php" class="add-button">
            <div>
                <span>+</span>
            </div>
        </a>
    </main>
</body>
</html>