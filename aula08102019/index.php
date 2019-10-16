<?php
include "./bd/conexao.php";

echo '<form method="post">Digite o nome: <input type="text" name="buscanome" size=60>';
echo '<input type="submit" value="Buscar"></form>';

echo '<form method="post" action="cliente.php?acao=novo">';
echo '<input type="submit" value="Novo"></form>';

$comandoSQL = "SELECT * FROM cliente";

if ($_POST["buscanome"]){
    $comandoSQL.=" WHERE nome LIKE '%" . $_POST["buscanome"] . "%' ";
}

$comandoSQL.=" ORDER BY nome";

$resultado=$conexao->query($comandoSQL);
if ($resultado->num_rows > 0) {
    echo '<table><thead><th>ID</th><th>Nome</th><th>CPF</th></thead>';
    while ($registro = $resultado->fetch_assoc()) {
        echo "<tr><td>" . $registro["id"] . "</td><td>" . $registro["nome"] . "</td><td>" . $registro["cpf"] . "</td></tr>";
    }
    echo "</table>";
}
?>