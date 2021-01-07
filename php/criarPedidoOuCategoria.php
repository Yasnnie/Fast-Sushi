<?php
include("conexao.php");
$tipo = $_GET['tipo'];
echo $tipo;
$nome = $_POST['nomePrato'];
$categoria = $_POST['categoriaPrato'];
$descricao = $_POST['descricaoPrato'];

$jsonString = file_get_contents('../json/login.json');
$data = json_decode($jsonString, true);

if ($tipo == "categoria") {
    $nome = $_POST['nomeCategoria'];
    $insercao = "INSERT INTO categoria(nome, id_estabelecimento) VALUE('{$nome}', {$data['idLogado']})";

    $query = mysqli_query($conexao, $insercao);
    if ($query == null) {
        echo $query;
    } else {
        header("Location: ./estabelecimento.php");
    }
} else {
    $insercao = "INSERT INTO prato(nome, id_categoria, descricao, id_estabelecimento) VALUE('{$nome}', '{$categoria}', '{$descricao}', {$data['idLogado']})";
    $query = mysqli_query($conexao, $insercao);
    if ($query == null) {
        echo $query;
    } else {
       header("Location: ./estabelecimento.php");
    }
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