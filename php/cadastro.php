<?php
//include("conexao.php");





?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cadastro - Fast Sushi</title>
</head>

<body onload="getEstados()">

    <div id="outer">
        <div id="middle">
            <div id="inner">
                <img src="../img/logo.png" alt="">
                <form method="POST" action="">
                    <ul>
                        <li>
                            <label for="option1" class="containerRadio" onchange="radioVerify()">Pessoa Física:
                                <input type="radio" name="tipoDeConta" id="option1">
                                <span class="circle"></span>
                            </label>
                            <label for="option2" class="containerRadio" onchange="radioVerify()">Estabelecimento:
                                <input type="radio" name="tipoDeConta" id="option2">
                                <span class="circle"></span>
                            </label>

                        </li>
                        <li id="tipoArea">
                            <h3>Selecione o tipo de conta</h3>
                        </li>

                        <li id="CPForCNPJ">
                            <br>
                        </li>

                        <li>
                            <input type="text" name="" id="email" placeholder="E-mail" pattern="\S+@\w+\.\w{2,6}(\.\w{2})?" oninput="verificarEmail()">
                            <ul class="veriVermelho" id="veriEmail">
                                <li></li>
                            </ul>
                        </li>


                        <li>
                            <input type="password" name="" id="senha" placeholder="Senha" oninput="fortificacaoSenha()">
                            <ul class="veriVermelho" id="veriSenha">
                                <li></li>
                            </ul>
                        </li>
                        <li>
                            <input type="password" name="" id="confsenha" placeholder="Confirme a Senha" oninput="confirmarSenha()">
                            <ul class="veriVermelho" id="veriConfSenha">
                                <li></li>
                            </ul>
                        </li>


                        <li>
                            <label for="">Estado:</label>
                            <div id="auxSelectEstado">
                                <div class="custom-select" style="width:200px;">
                                    <select name="" id="labelEstados" onchange="getCidades()">
                                        <option value="">Selecione</option>
                                    </select>
                                </div>
                            </div>


                        </li>
                        <label for="">Cidade:</label>
                        <select name="" id="labelCidade"></select>
                        <li>
                            <input type="text" name="" id="bairro" placeholder="Bairro" style="width: 300px;">
                        </li>
                        <li>
                            <input type="text" name="" id="" placeholder="Rua">
                            <input type="text" name="" id="numeroR" placeholder="Nº" oninput="formatarNumero()">
                        </li>
                        <li>
                            <label for="">Telefone:</label>
                            <input id="telefone" type="text" name="" id="" placeholder="(__)____________" oninput="ajeitarTelefone()">
                        </li>

                        <li><button type="submit">Cadastrar</button></li>
                    </ul>
                </form>

            </div>
        </div>
    </div>
    <script src="../js/select.js"></script>
    <script src="../js/pluginIBGE.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="../js/formatarCadastro.js"></script>
</body>

</html>