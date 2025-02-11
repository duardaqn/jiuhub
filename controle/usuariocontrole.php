<?php

require_once 'modelo/dominio/Usuario.php';
require_once 'modelo/dao/UsuarioDao.php';

$UsuarioDao = new UsuarioDao();

$acao = isset($_REQUEST['acao']) ? $_REQUEST['acao'] : NULL;

if ($acao == NULL) {
    include 'pages/cadastro.php';
} else if ($acao == "salvar") {
    $Usuario = new Usuario();
    $Usuario->setemail($_POST['email']);
    $Usuario->settelefone($_POST['telefone']);
    $Usuario->setnome_usuario($_POST['nome_usuario']);
    $Usuario->setsenha($_POST['senha']);


    $UsuarioDao->salvar($Usuario);
    header("Location: ?page=UsuarioControle&acao=listar");
} else if ($acao == "listar") {
    $Usuarios = $UsuarioDao->listar();
    include 'pages/cadastro.php';
} else if ($acao == "alterar") {
   
    $Usuario = new Usuario();
    $Usuario->setId_usuario($_POST['id_usuario']);
    $Usuario->setemail($_POST['email']);
    $Usuario->settelefone($_POST['telefone']);
    $Usuario->setnome_usuario($_POST['nome_usuario']);
    $Usuario->setsenha($_POST['senha']);
    $UsuarioDao->atualizar($Usuario);

    header("Location: ?page=UsuarioControle&acao=listar");
}