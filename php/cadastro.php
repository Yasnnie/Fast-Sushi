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

<body>

    <div id="outer">
        <div id="middle">
            <div id="inner">
                <ul>
                    <li>
                        <label for="option1">Pessoa Física</label> <input type="radio" name="tipoDeConta" id="option1">
                        <label for="option2">Estabelecimento</label> <input type="radio" name="tipoDeConta" id="option2">

                    </li>
                    <li>
                        <input type="text" name="" id="" placeholder="Nome">
                        <input type="text" name="" id="" placeholder="Sobrenome">
                    </li>
                    <li>
                        <input type="text" name="" id="email" placeholder="E-mail">
                    </li>
                    <li>
                        <input type="password" name="" id="senha" placeholder="Senha">
                    </li>
                    <li>
                        <input type="password" name="" id="confsenha" placeholder="Confirme a Senha">
                    </li>
                    <li>
                        <label for="">Estado:</label> <select name="" id="">
                            <option value="">Selecione</option>
                            <option value="">Acre (AC)</option>
                            <option value="">Alagoas (AL)</option>
                            <option value="">Amapá (AP)</option>
                            <option value="">Amazonas (AM)</option>
                            <option value="">Bahia (BA)</option>
                            <option value="">Ceará (CE)</option>
                            <option value="">Distrito Federal (DF)</option>
                            <option value="">Espírito Santo (ES)</option>
                            <option value="">Goiás (GO)</option>
                            <option value="">Maranhão (MA)</option>
                            <option value="">Mato Grosso (MT)</option>
                            <option value="">Mato Grosso do Sul (MS)</option>
                            <option value="">Minas Gerais (MG)</option>
                            <option value="">Pará (PA)</option>
                            <option value="">Paraíba (PB)</option>
                            <option value="">Paraná (PR)</option>
                            <option value="">Pernambuco (PE)</option>
                            <option value="">Piauí (PI)</option>
                            <option value="">Rio de Janeiro (RJ)</option>
                            <option value="">Rio Grande do Norte (RN)</option>
                            <option value="">Rio Grande do Sul (RS)</option>
                            <option value="">Rondônia (RO)</option>
                            <option value="">Roraima (RR)</option>
                            <option value="">Santa Catarina (SC)</option>
                            <option value="">São Paulo (SP)</option>
                            <option value="">Sergipe (SE)</option>
                            <option value="">Tocantins (TO)</option>
                        </select>
                    </li>
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



</body>

</html>