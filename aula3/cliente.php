<html>
    <head>
        <title>Response</title>
    </head>
<?php
echo  "<h1>Escrever um conteudo no HTML  do reponse</h1>";
echo "<h2>Dados do Cliente</h2>";

echo "<b>Nome: </b>".filter_input(INPUT_GET,'nomecliente')."<br>"; 
echo "<b>Data de Nascimento: </b>".filter_input(INPUT_GET,'dtnasc')."<br>"; 
echo "<b>Email: </b>".filter_input(INPUT_GET,'email')."<br>"; 
echo "<b>Telefone: </b>".filter_input(INPUT_GET,'tel')."<br>"; 
echo "<b>Idade: </b>".filter_input(INPUT_GET,'idade')."<br"; 
echo "<b>Id: </b>".filter_input(INPUT_GET,'id')."<br>"; 
echo "</ul>";
?>