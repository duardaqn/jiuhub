<?php 

$host = 'localhost';
$dbname = 'jiuhub';
$username = 'root'; //adicionem o username do workbench do pc que ces forem usar
$password = 'aluno'; // a senha igual

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_errno){

    die("Erro na conexão como banco de dados" . $conn->connect_error);

}

echo "Conexão estabelecida";

?>
