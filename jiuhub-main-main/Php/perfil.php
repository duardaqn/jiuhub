<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="stylesheet" href="..\style\perfil.css"> <!-- CSS específico -->
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
    <div class="profile-container">
        <!-- Foto de perfil -->
        <div class="profile-pic">
            <img src="../img/user-profile.jpg" alt="Foto de perfil">
        </div>

        <!-- Nome do usuário -->
        <h1>Saulo Bezerra</h1>

        <!-- Opções do perfil -->
        <div class="profile-options">
            
            <div class="profile-option">
                <img src="../img/key.png" alt="Atualizar Dados">
                <div class="option-text">
                <a href="editar.php"><h3>Atualizar Dados</h3> </a>
                    <p>Email, Nome, Telefone, Senha...</p>
                </div>
            </div>
            <div class="profile-option">
                <img src="../img/help.png" alt="Ajuda">
                <div class="option-text">
                    <h3>Ajuda</h3>
                    <p>Central de ajuda, fale conosco, política de privacidade.</p>
                </div>
            </div>
        </div>
