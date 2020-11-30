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
                        <label for="">Estado:</label> 
                        <select name="" id= "labelEstados">   

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

    <script type="text/javascript">                                   
        $(document).ready( function() { 
            try{
                $('#labelEstados').load('cadastro.php');
            } catch(e) {
            }            
            getEstados();
        }); 

</script> 
</body>

</html>