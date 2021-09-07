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
<h2>Nova Atividade</h2>
<form action="SalvarNovaAtividade.php" method="POST">
<div class="form-group">
<label for="titulo">Título</label>
<input type="text" class="form-control" name="titulo">
</div>
<div class="form-group">
<label>Descrição</label>
<textarea class="form-control" name="descricao"
rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
</body>
</html>
