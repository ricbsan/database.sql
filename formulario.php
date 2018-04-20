
<html>
<head>
<title>Tetando conexao ao banco de dados</title>
</head>
<body>
Formulario de cadastro <br>
<form name="cadastro" action="cadastra.php" method="POST">

<label>Nome do cliente</label>
<input type="text" name="NomeCliente" size="30"><br>
<label>Sobrenome </label>
<input type="text" name="SobrenomeCliente" size="45"><br>
<label>Sexo do Cliente</label><select name="sexo">
<option value="M">Masculino</option>
<option value="M">Feminino</option>
<option value="M">Nao Declarado</option>
<select><br>

<input type="submit" name="enviar" value="Enviar">
</form>
</body>
</html>