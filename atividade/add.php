<?php 
include './bd/conexao.php';
$sql  = "INSERT INTO `unp`.`atletas` (`nome`, `sobrenome`, `ativo`, `uf`) VALUES ('".$_POST['nome']."', '".$_POST['sobrenome']."', '1', '".$_POST['uf']."')";

if ($conexao->query($sql) == TRUE) {
    header('Location:atletas.php');
}
else {
    echo "Problemas: ".$conexao->error;
    echo $sql;
}
?>