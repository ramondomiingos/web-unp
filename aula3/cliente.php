<html>
    <head>
        <title>Response </title>
    </head>
<?php
echo  "<h1>Escrever um conteudo no HTML  do reponse</h1>";
echo "<h2>Dados do Cliente</h2>";
echo "<b>Nome: </b>".filter_input(INPUT_POST,'nomecliente')."<br>"; 
echo "<b>Data de Nascimento: </b>".filter_input(INPUT_POST,'dtnasc')."<br>"; 
echo "<b>Email: </b>".filter_input(INPUT_POST,'email')."<br>"; 
echo "<b>Telefone: </b>".filter_input(INPUT_POST,'tel')."<br>"; 
echo "<b>Idade: </b>".filter_input(INPUT_POST,'idade')."<br>"; 
echo "<b>Id: </b>".filter_input(INPUT_POST,'id')."<br>"; 
echo "<b>Sexo: </b>".filter_input(INPUT_POST,'sexo')."<br>"; 
?>
</html>