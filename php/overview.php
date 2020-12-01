<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/overview.css">
    <title>Document</title>
</head>

<body>
    <header>
        <img src="../img/logo.png" alt="">
        <div class="procurar">

            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="" id="spaceprocurar" placeholder="Buscar..." list="historico">
            <datalist id="historico">
                <option value="Chine Box"></option>
                <option value="Restaurante"></option>
            </datalist>

        </div>

        <div class="barinfo">
            <a href="" class="user"> Usuário</a>
        </div>

    </header>


    <div id="blocoEstabelecimentos">
        <div id="buscarRegiao">
            <div class="aux">
            <label for="">Estado:</label>
            <div id="" class="custom-select">
                <select name="" id="">
                    <option value="">Selecione</option>
                    <option value="">Opção 2</option>
                    <option value="">Opção 3</option>
                </select>
            </div>
            <label for="">Cidade:</label>
            <div class="custom-select">
                <select name="" id="">
                    <option value="">Selecione</option>
                    <option value="">Opção 2</option>
                    <option value="">Opção 3</option>
                </select>
            </div>
                <a href="">Buscar <i class="fa fa-search" aria-hidden="true"></i></a>
            </div>
          
           
        </div>

        <div id="estabelecimentos">
            <ul>
                <li>
                    <img src="../img/login.png" alt="">
                    <div class="descEstabelecimento">
                        <a href="">Nome do estabelecimento</a>
                        <h3>Endereço:Acre/ Acrelandia/ Rua da casa amarela Nº 1000</h3>

                        <div class="phone">
                            <i class="fa fa-phone , iconphone" aria-hidden="true"></i>
                            <label for="">Telefone: (09)40028922 </label>
                            <div class="avalicao">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>

                        </div>
                        <p>O Chinatown tem como visão vir a ser a melhor operação de culinária
                            chinesa no Brasil, portanto, em 1995, iniciou o sistema de franquias</p>

                    </div>

                    <div class="hours">
                        <i class="fa fa-clock-o" aria-hidden="true"></i><label for="">12h~21</label>
                    </div>

                </li>
                <li>
                    <img src="../img/login.png" alt="">
                    <div class="descEstabelecimento">
                        <a href="">Nome do estabelecimento</a>
                        <h3>Endereço:Acre/ Acrelandia/ Rua da casa amarela Nº 1000</h3>

                        <div class="phone">
                            <i class="fa fa-phone , iconphone" aria-hidden="true"></i>
                            <label for="">Telefone: (09)40028922 </label>
                            <div class="avalicao">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </div>

                        </div>
                        <p>Descrição de estabelecimento</p>

                    </div>
                    <div class="hours">
                        <i class="fa fa-clock-o" aria-hidden="true"></i><label for="">12h~21</label>
                    </div>

                </li>
            </ul>
        </div>
    </div>

    <script src="../js/select.js"></script>
</body>

</html>