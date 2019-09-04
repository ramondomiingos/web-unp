<html>
    <head>
        <title>Cadastro  Fiscal</title>
        <meta charset="UTF-8"></meta>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content=" Ramon">
        <meta name="description" content="Cadastro de clientes">
        <meta name="keywords" content="cliente, clientes, html, exemplo"> 
    </head>
    <body>
        <div>
        
        
            <fieldset>
                <legend>Cadastro Fiscal</legend>
           <?php 

            echo "<b>Nome: </b>".filter_input(INPUT_POST,'nomecliente')."<br>"; 
            echo "<b>Data de Nascimento: </b>".filter_input(INPUT_POST,'dtnasc')."<br>"; 
            echo "<b>Endereço: </b>".filter_input(INPUT_POST,'endereco')."<br>"; 
            echo "<b>Telefone: </b>".filter_input(INPUT_POST,'tel')."<br>"; 
            echo "<b>Sexo: </b>".filter_input(INPUT_POST,'sexo')."<br>"; 
            echo "<b>Email: </b>".filter_input(INPUT_POST,'email')."<br>"; 
            if( filter_input(INPUT_POST,'nec') == 'on'){
              echo "<b>Necessidade?: SIM -  </b>".filter_input(INPUT_POST,'necess')."<br>"; 
            }else{
              echo "<b>Necessidade?: NAO </b><br>";     
            }
            echo "<b>Observações: </b>".filter_input(INPUT_POST,'obs')."<br>"; 



            ?>
           
        </fieldset>


        </div>
    </body>
</html>