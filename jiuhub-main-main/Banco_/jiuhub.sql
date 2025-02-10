
create database jiuhub;

CREATE TABLE login (
    id_login INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL
);

-- Tabela de Usuários
CREATE TABLE usuario (
    id_usuario INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) UNIQUE NOT NULL,
    telefone VARCHAR(20),
    nome_usuario VARCHAR(100) NOT NULL,
    senha VARCHAR(255) NOT NULL,
    FOREIGN KEY (email) REFERENCES login(email) ON DELETE CASCADE
);

-- Tabela de Alunos
CREATE TABLE aluno (
    id_aluno INT AUTO_INCREMENT PRIMARY KEY,
    nome_completo VARCHAR(255) NOT NULL,
    data_nascimento DATE NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    matricula VARCHAR(20) UNIQUE NOT NULL,
    telefone VARCHAR(20),
    endereco TEXT,
    faixa ENUM('Branca', 'Cinza', 'Amarela', 'Laranja', 'Verde', 'Azul', 'Roxa', 'Marrom', 'Preta') NOT NULL,
    FOREIGN KEY (email) REFERENCES usuario(email) ON DELETE CASCADE
);

-- Tabela de Turmas
CREATE TABLE turma (
    id_turma INT AUTO_INCREMENT PRIMARY KEY,
    nome varchar(255) not null,
    horario TIME NOT NULL,
    data_inicio DATE NOT NULL,
    periodo ENUM('Matutino', 'Vespertino', 'Noturno') NOT NULL
);

-- Tabela de Aulas
CREATE TABLE aula (
    id_aula INT AUTO_INCREMENT PRIMARY KEY,
    data_aula DATE NOT NULL,
    horario TIME NOT NULL,
    id_turma INT NOT NULL,
    FOREIGN KEY (id_turma) REFERENCES turma(id_turma) ON DELETE CASCADE
);

INSERT INTO turma (nome, horario, data_inicio, periodo)
VALUES
    ('Kids',  '09:00:00', '2024-01-10', 'Matutino');
