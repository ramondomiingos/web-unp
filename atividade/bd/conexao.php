<?php
$servidor="127.0.0.1";
$usuario="unp";
$senha="123456";
//Cria uma conexão ao banco de dados
$conexao = new mysqli($servidor,$usuario,$senha,"unp");
//Verifica se a conexão foi estabelecida
if ($conexao->connect_errno){
    die("Falha na conexão: ".$conexao->connect_errno);
}
?>