<?php

class UsuarioDao {

    public function salvar($Usuario) {
        require_once "modelo/dominio/Conexao.php";
        $conexao = new Conexao();

        $email = $Usuario->getemail();
        $telefone = $Usuario->gettelefone();
        $nome_usuario = $Usuario->getnome_usuario();
        $senha = $Usuario->getsenha();

        $query = $conexao->getConexao()->prepare('INSERT INTO usuario(email, telefone, nome_usuario, senha) 
        VALUES (:email, :telefone, :nome_usuario, :senha');

        $query->bindParam(':email', $email);
        $query->bindParam(':telefone',$telefone);
        $query->bindParam(':nome_usuario',$nome_usuario);
        $query->bindParam(':senha',$senha);
             
        try {
            $query->execute();
        } catch (mysqli_sql_exception $e) {
            die("Erro na execução da consulta: " . $e->getMessage());
        }
    }
    public function atualizar($Usuario)
    {
        $host = "localhost";
        $usuario = "root";
        $senhabd = "aluno";
        $bd = "jiuhub";

        $id_usuario = $Usuario->getid_usuario();
        $email = $Usuario->getemail();
        $telefone = $Usuario->gettelefone();
        $nome_usuario = $Usuario->getnome_usuario();
        $senha = $Usuario->getsenha();

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senhabd);
        $query = $conexao->prepare('update usuario set email=:email, telefone=:telefone, nome_usuario=:nome_usuario, senha=:senha');
        $query->bindParam(':id_usuario', $id_usuario);
        $query->bindParam(':email', $email);
        $query->bindParam(':telefone', $telefone);
        $query->bindParam(':nome_usuario', $nome_usuario);
        $query->bindParam(':senha', $senha);
        $query->execute();
    }
    public function get($id_usuario)
    {
        $host = "localhost";
        $usuario = "root";
        $senha = "aluno";
        $bd = "jiuhub";

        $conexao = new PDO("mysql:host=$host;dbname=$bd", $usuario, $senha);

        $query = $conexao->prepare('SELECT id_usuario, email, telefone, nome_usuario, senha FROM usuario where id_usuario=:id_usuario');
        $query->bindParam(':id',$id);
        $query->execute();
        $Usuario = $query->fetchAll(PDO::FETCH_CLASS);

        return $Usuario[0];
}
}