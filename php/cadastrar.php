<?php
include("conexao.php");



$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];

$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$telefone = $_POST['telefone'];

/*
$nome = 'nome';
$email = 'email';
$senha ='senha';
$estado = 'estado';
$cidade = 'cidade';

$bairro = 'bairro';
$rua = 'rua';
$numero = 'numero';
$telefone ='telefone';
*/

$insercao = "";

$answer = $_POST['tipoDeConta'];
if ($answer == "pf") {
    echo 'pessoa fisica';
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
    $insercao = "INSERT INTO pessoa_fisica(nome, sobrenome, cpf, email, senha, estado, cidade, bairro, rua, numero, telefone) VALUE('{$nome}', '{$sobrenome}', '{$cpf}', '{$email}', md5('{$senha}'), '{$estado}', '{$cidade}', '{$bairro}', '{$rua}', '{$numero}', '{$telefone}')";
} else if ($answer == "es") {
    echo 'estabelecimento';
    $cnpj = 'cnpj';
    $insercao = "INSERT INTO estabelecimento(nome, cnpj, email, senha, estado, cidade, bairro, rua, numero, telefone) VALUE('{$nome}', '{$sobrenome}', '{$cpf}', '{$email}', md5('{$senha}'), '{$estado}', '{$cidade}', '{$bairro}', '{$rua}', '{$numero}', '{$telefone}')";
}

$query = mysqli_query($conexao, $insercao);
if($query == null) {
    echo "meu deus";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>