<html>
    <head>
        <title>Response </title>
    </head>
<?php
//ini_set('display_erros',1);
//ini_set('display_startup_erros',1);
//error_reporting(E_ALL);
//Exemplo de como exibir erros de maneira profunda. TOMAR CUIDADO.

$var1 = 'Cliente';
echo "<h1> Lista de ".$var1."</h1>";
echo  "<h1>Escrever um conteudo no HTML  do response</h1>";
echo "<h2>Dados do Cliente</h2>";
echo "<b>Nome: </b>".filter_input(INPUT_POST,'nomecliente')."<br>"; 
echo "<b>Data de Nascimento: </b>".filter_input(INPUT_POST,'dtnasc')."<br>"; 
echo "<b>Email: </b>".filter_input(INPUT_POST,'email')."<br>"; 
echo "<b>Telefone: </b>".filter_input(INPUT_POST,'tel')."<br>"; 
echo "<b>Idade: </b>".filter_input(INPUT_POST,'idade')."<br>"; 
echo "<b>Id: </b>".filter_input(INPUT_POST,'id')."<br>"; 
echo "<b>Sexo: </b>".filter_input(INPUT_POST,'sexo')."<br>"; 
echo "<b>Senha: </b>".filter_input(INPUT_POST,'senha')."<br>"; 
echo "<b>MD5: </b>".MD5(filter_input(INPUT_POST,'senha'))."<br>"; 
echo "<b>SHA1: </b>".sha1(filter_input(INPUT_POST,'senha'))."<br>"; 
echo "<b>Tipo do Cliente: </b>".filter_input(INPUT_POST,'tipo')."<br>"; 
echo "<b>Observacao: </b>".filter_input(INPUT_POST,'observacao')."<br>"; 
$caminhoupload = pathinfo($_FILES);
if(is_uploaded_file($_FILE['arq']['tmp_name'])){
    var_dump($_FILES['arq']['tmp_name']);
}
var_dump($_FILES["arq"]["temp_name"]);
//echo "<b>Arquivo: </b>".filter_input_array (INPUT_POST ,$_FILES['arq'])."<br>"; 
echo "<b>WebPage: </b>".filter_input(INPUT_POST,'pagina')."<br>"; 

?>
</html>