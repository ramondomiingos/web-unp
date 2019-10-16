<?php
$servidor="localhost";
$usuario="root";
$senha="usbw";

//Cria uma conexão ao banco de dados
$conexao = new mysqli($servidor,$usuario,$senha,"dbvenda");

//Verifica se a conexão foi estabelecida
if ($conexao->connect_errno){
    die("Falha na conexão: ".$conexao->connect_errno);
}

?>