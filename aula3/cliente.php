<html>
    <head>
        <title>Response </title>
    </head>
<?php
$var1 = 'Cliente';
echo "<h1> Lista de ".$var1."</h1>";
echo  "<h1>Escrever um conteudo no HTML  do reponse</h1>";
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
echo "<b>8 DIGITOS: </b>".substr(MD5(filter_input(INPUT_POST,'senha')),0,8)."<br>"; 
?>
</html>