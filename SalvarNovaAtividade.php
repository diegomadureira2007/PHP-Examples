<?php
$con = new mysqli("localhost", "root", null, "suporte");
if($con->error) {
exit($con->error);
}
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];
$con->query(
"INSERT
INTO atividade
(Titulo, Descricao)
VALUES
('$titulo', '$descricao')");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=
1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Registrar Nova Atividade</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.mi
n.css" integrity="sha384-
Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="alert alert-primary" role="alert"> Atividade Registrada com Sucesso </div>
	</div>
</body>
</html>