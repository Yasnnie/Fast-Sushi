<?php
include("conexao.php");

$email = $_POST['email'];
$senha = $_POST['senha'];


//Pessoa

$sql = "SELECT id FROM pessoa_fisica WHERE email = '{$email}' AND senha = md5('{$senha}')";
$result = mysqli_query($conexao, $sql);
$rows = mysqli_num_rows($result);

if ($rows == 0) {
    $sql = "SELECT id FROM estabelecimento WHERE email = '{$email}' AND senha = md5('{$senha}')";
    $result = mysqli_query($conexao, $sql);
    $rows = mysqli_num_rows($result);
    if ($rows == 0) { 
        header("Location: ../html/login.html?id=401");
    } else {
        $idEncontrado = 0;
        while ($row = $result->fetch_array()) {
            $idEncontrado = $row['id'];
        }
        $jsonString = file_get_contents('../json/login.json');
        $data = json_decode($jsonString, true);
        $data['idLogado'] = $idEncontrado;
        $data['tipoConta'] = "estabelecimento";
        $newJsonString = json_encode($data);
        file_put_contents('../json/login.json', $newJsonString);
        header("Location: ./estabelecimento.php");
    }
} else {
    $idEncontrado = 0;
    while ($row = $result->fetch_array()) {
        $idEncontrado = $row['id'];
    }
    $jsonString = file_get_contents('../json/login.json');
    $data = json_decode($jsonString, true);
    $data['idLogado'] = $idEncontrado;
    $data['tipoConta'] = "pf";
    $newJsonString = json_encode($data);
    file_put_contents('../json/login.json', $newJsonString);
    header("Location: ../php/overview.php");
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