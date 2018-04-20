<?php
include_once("conectar.php");

$nome = $_POST['NomeCliente'];
$sobrenome = $_POST['SobrenomeCliente'];
$sexo = $_POST['sexo'];

if(!$strcon) {
	die('Não foi possível conectar ao Banco de Dados');
}

$sql = "INSERT INTO cadastro VALUES";
$sql .= "('$nome', '$sobrenome', '$sexo')";
mysqli_query($strcon, $sql) or die ("Erro ao tentar cadastrar o registro");
mysqli_close($strcon);
echo "Cliente cadastrado com sucesso!<br>";
echo "<a href='formulario.php'>clique para realizar um novo cadastro</a><br>";
echo "<a href='consulta.php'>Clique para realizar uma conslta</a><br>";
?>