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
    <title>Restaurantes - Fast Sushi</title>
    <link rel="shortcut icon" href="../img/logo.png">
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

        <div class="barinfo" style="margin-right: 50px;">
            <a href="" class="user"> Usuário</a>
        </div>

        <div class="barinfo">
            <a href="systemLogoff.php" class="user"> Sair</a>
        </div>

    </header>


    <div id="blocoEstabelecimentos">
        <div id="buscarRegiao">
            <div class="aux">
                <label for="">Estado:</label>
                <div id="" class="select-box">
                    <select name="" id="">
                        <option value="">Selecione</option>
                        <option value="">Opção 2</option>
                        <option value="">Opção 3</option>
                    </select>
                </div>
                <label for="">Cidade:</label>
                <div class="select-box">
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

                <?php
                include("conexao.php");

                $sql = "SELECT * FROM estabelecimento";
                $result = mysqli_query($conexao, $sql);
                $rows = mysqli_num_rows($result);
                
                if ($rows == 0) {
                    echo "<p>Não existe estabelecimentos cadastrados no nosso sistema</p>";
                } else {
                    while ($row = $result->fetch_array()) {
                        $innerHtml = "
                        <li>
                    <img src='../img/login.png' alt=''>
                    <div class='descEstabelecimento'>
                        <a href='./cardapio.php?id={$row['id']}'>{$row['nome']}</a>
                        <h3>Endereço:{$row['estado']}/ {$row['cidade']}/{$row['bairro']}/{$row['rua']}Nº {$row['numero']}</h3>

                        <div class='phone'>
                            <i class='fa fa-phone , iconphone' aria-hidden='true'></i>
                            <label for=''>Telefone: {$row['telefone']} </label>
                            <div class='avalicao'>
                                <i class='fa fa-star' aria-hidden='true'></i>
                                <i class='fa fa-star' aria-hidden='true'></i>
                                <i class='fa fa-star' aria-hidden='true'></i>
                                <i class='fa fa-star' aria-hidden='true'></i>
                                <i class='fa fa-star' aria-hidden='true'></i>
                            </div>

                        </div>
                        <p>O Chinatown tem como visão vir a ser a melhor operação de culinária
                            chinesa no Brasil, portanto, em 1995, iniciou o sistema de franquias</p>

                    </div>

                    <div class='hours'>
                        <i class='fa fa-clock-o' aria-hidden='true'></i><label for=''>12h~21</label>
                    </div>

                </li>
                        ";
                        echo $innerHtml;
                    }
                }
                ?>
            </ul>
        </div>
    </div>

</body>
</html>