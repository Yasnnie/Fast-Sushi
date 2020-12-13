<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "fast_sushi";

$conexao = new MySQLi($host, $usuario, $senha, $bd);


if($conexao -> connect_error){
   echo "Desconectado! Erro: " . $mysqli_connection->connect_error;
}


?>