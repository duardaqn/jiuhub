<?php

class Usuario{
    public $id_usuario;
    private $email;
    private $telefone;
    private $nome_usuario;
    private $senha;

  //  public function __construct($sexo, $endereco, $estado, $cidade, $cep, $nome){
    //    echo "SEXO: " . $sexo . "ENDEREÇO: " . $endereco . "ESTADO: " . $estado . "CIDADE: " . $cidade . "CEP: " . $cep . "NOME: " . $nome;
   // }


    public function setid_usuario($id_usuario){
        $this-> id_usuario = $id_usuario;
    }
    public function getid_usuario(){
        return $this-> id_usuario;
    }
    public function setemail($email){
        $this-> email = $email;
    }
    public function getemail(){
        return $this-> email;
    }
    public function settelefone($telefone){
        $this-> telefone = $telefone;
    }
    public function gettelefone(){
        return $this-> telefone;
    }

    public function setnome_usuario($nome_usuario){
        $this-> nome_usuario = $nome_usuario;
    }
    public function getnome_usuario(){
        return $this-> nome_usuario;
    }

    public function setnumero($sebha){
        $this-> senha = $senha;
    }
    public function getsenha(){
        return $this-> senha;
    }
}