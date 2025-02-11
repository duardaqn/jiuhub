<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alunos</title>
    <link rel="stylesheet" href="..\style\aluno.css"> <!-- Arquivo CSS específico para esta tela -->
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
        <h1>Alunos</h1>
        <div class="cards-container">
            <div class="card">
                <div class="card-header">
                    <img src="../img/aluno1.png" alt="Foto de Ana Luiza">
                    <div>
                        <span class="name">Ana Luiza da Silva Felizardo</span>
                        <span class="class">Turma: Regular</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="../img/aluno2.png" alt="Foto de Malu Oliveira">
                    <div>
                        <span class="name">Malu Oliveira Perez</span>
                        <span class="class">Turma: Kids</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="../img/aluno3.png" alt="Foto de Martis Pereira">
                    <div>
                        <span class="name">Martis Perreira Lima</span>
                        <span class="class">Turma: Regular</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <img src="../img/aluno4.png" alt="Foto de Thomas Ferras">
                    <div>
                        <span class="name">Thomas Ferras Cavalcante</span>
                        <span class="class">Turma: Kids</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botão flutuante -->
        <div class="add-button">
            <span>+</span>
        </div>
    </main>
</body>
</html>