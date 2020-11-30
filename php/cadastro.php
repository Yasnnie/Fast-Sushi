<?php
include("conexao.php");





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cadastro.css">

    <title>Cadastro - Fast Sushi</title>
</head>

<body onload="getEstados()">

    <div id="outer">
        <div id="middle">
            <div id="inner">
                <ul>
                    <li>
                        <label for="option1" class="containerRadio">Pessoa Física:
                            <input type="radio" name="tipoDeConta" id="option1">
                            <span class="circle"></span>
                        </label>
                        <label for="option2" class="containerRadio">Estabelecimento:
                            <input type="radio" name="tipoDeConta" id="option2">
                            <span class="circle"></span>
                        </label>

                    </li>
                    <li>
                        <input type="text" name="" id="" placeholder="Nome">
                        <input type="text" name="" id="" placeholder="Sobrenome">
                    </li>
                    <li>
                        <input type="text" name="" id="email" placeholder="E-mail">
                    </li>
                    <li>
                        <input type="text" name="" id="email" placeholder="CPF">
                    </li>
                    <li>
                        <input type="password" name="" id="senha" placeholder="Senha">
                    </li>
                    <li>
                        <input type="password" name="" id="confsenha" placeholder="Confirme a Senha">
                    </li>
                    <li>
                        <label for="">Estado:</label>
                        <select name="" id="labelEstados" onchange="getCidades()"></select>
                    </li>
                    <label for="">Cidade:</label>
                    <select name="" id="labelCidade"></select>
                    <li>
                        <input type="text" name="" id="" placeholder="Rua"> <input type="text" name="" id="numeroR" placeholder="Nº">
                    </li>
                    <li>
                        <label for="">Telefone:</label>
                        <input type="text" name="" id="" placeholder="(__)____________">
                    </li>
                    <li><button>Cadastrar</button></li>
                </ul>
            </div>
        </div>
    </div>
    <script src="../js/pluginIBGE.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


    </script>
</body>

</html>