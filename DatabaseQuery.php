<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=
1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Atividades Pendentes</title>
<link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.mi
n.css" integrity="sha384-
Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
crossorigin="anonymous">
</head>
<body>
<?php
$con = new mysqli("localhost", "root", null, "suporte");
if($con->error) {
exit($con->error);
}
$atvs = $con->query(
"SELECT
ID,
Titulo,
DtCriacao,
COALESCE(Responsavel, '[Não Atribuído]'),
Progresso
FROM atividade
WHERE Situacao < 3;");
?>
<table class="table table-striped">
<thead>
<tr>
<th>ID</td>
<th>Titulo</td>
<th>Dt.Criação</td>
<th>Responsável</td>
<th>%</td>
</tr>
</thead>
<tbody>
<?php
while($r = $atvs->fetch_array()) {
echo
"<tr><td>{$r[0]}</td><td>{$r[1]}</td><td>{$r[2]}</td><td>{$r[3]}</td><td>
{$r[4]}</td></tr>";
}
?>
</tbody>
</table>
</body>
</html>