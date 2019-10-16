<?php
include "./bd/conexao.php";

// Criar um formulário para o novo
if ($_POST["op"] == "inclusao")  {
    $comandoSQL="INSERT INTO cliente (nome, cpf, dtnascimento, sexo, endereco, bairro, cidade, cep, uf, telefone, email) VALUES ('" . $_POST['nome'] ."','" . $_POST['cpf'] ."','" . $_POST['dtnascimento'] ."','" . $_POST['sexo'] ."','" . $_POST['endereco'] ."','" . $_POST['bairro'] ."','" . $_POST['cidade'] ."','" . $_POST['cep'] ."','" . $_POST['uf'] ."','" . $_POST['telefone'] ."','" . $_POST['email'] ."')";
    if ($conexao->query($comandoSQL) == TRUE) {
        echo "Registro incluído com sucesso.<br>";
        echo '<a href="index.php">Voltar</a><br>';
    }
    else {
        echo "Problemas: ".$conexao->error;
    }
}

if ($_GET["acao"] == "novo"){
?>
    <form method="post" >
    <input type="hidden" name="op" value="inclusao" />
    Nome: <input type="text" name="nome" size="40" maxlength="50" /><br>
    CPF: <input type="text" name="cpf" size="11" maxlength="11" /><br>
    Nascimento: <input type="date" name="dtnascimento" /><br>
    Sexo: <input type="radio" name="sexo" value="M" />M <input type="radio" name="sexo" value="F" />F<br>
    Endereço: <input type="text" name="endereco" size="50" maxlength="90" /><br>
    Bairro: <input type="text" name="bairro" size="40" maxlength="45" /><br>
    Cidade: <input type="text" name="cidade" size="40" maxlength="45" /><br>
    UF: <input type="text" name="uf" size="2" maxlength="2" /><br>
    CEP: <input type="text" name="cep" size="8" maxlength="8" /><br>
    Telefone: <input type="text" name="telefone" size="20" maxlength="20" /><br>
    E-Mail: <input type="text" name="email" size="80" maxlength="100" /><br>
    <input type="submit" value="Gravar" />
    </form>
<?php
}
?>