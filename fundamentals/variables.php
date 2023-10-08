<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Variables</title>
</head>
<body>
	<form method="get">
		<label for="person_name">Name:</label>
		<input type="text" name="person_name">
		<button>Submit</button>
	</form>
	<?php 
		// Pegando o valor do formulário
		$name = $_GET['person_name'];

		// Para fazer append de texto e variáveis usamos o . após a variável
		echo $name.", um cara bonito";
	?>
</body>
</html>