<?php 

require_once "autoload.php";

$usuario = new App\Aulas\Usuario($_POST['nome'], $_POST['genero']);
$username = new App\Aulas\Username($_POST['email'], $_POST['senha']);
$email = new App\Aulas\Email($_POST['email']);
$endereco = new App\Aulas\Endereco($_POST['endereco'], $_POST['cep']);
$telefone = new App\Aulas\Telefone($_POST['telefone']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.min.css">
    <title>Curso Strings</title>
</head>
<body>

<div class="mx-5 my-5">
<h1>Cadastro feito com sucesso.</h1>
<p> <?= $usuario -> getTratamentoSobrenome(); ?>, seguem os dados de sua conta:</p>
<ul class="list-group">
    <li class="list-group-item">Primeiro nome: <?= $usuario -> getNome(); ?> </li>
    <li class="list-group-item">Sobrenome: <?= $usuario -> getSobrenome(); ?>  </li>
    <li class="list-group-item">Usuário: <?= $username -> getUsername(); ?> </li>
    <li class="list-group-item">Senha: <?= $username -> getSenha(); ?> </li>
    <li class="list-group-item">Telefone: <?= $telefone -> getTelefone(); ?> </li>
    <li class="list-group-item">Email: <?= $email -> getEmail(); ?> </li>
    <li class="list-group-item">Endereço: <?= $endereco -> getEndereco(); ?> </li>
    </ul>
</div>
</body>
</html>
