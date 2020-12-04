<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/estabelecimento.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>Seu Restaurante - Fast Sushi</title>
</head>

<body>

    <!-- COLOCAR UM ESPAÇO PARA ADICIOAR COISAS AO CARDÁPIO -->

    <div id="box">
        <div class="container">
            <img src="../img/teste.jpg" alt="">
            <button><a href="">Histórico de Pedidos</a></button>
            <button>Editar Perfil</button>
            <button>Cardápio</button>
            <button>Sair</button>

        </div>

        <div class="pedido">
            <table>
                <tr>
                    <td>
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td>
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td>
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td>
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td>
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>

                </tr>


            </table>
        </div>


    </div>

    <div class="cardapio">
        <div class="categoria">
            <form action="">
                <h1>Criar Nova Categoria:</h1>
                <label for="">Nome da Categoria:</label>
                <br>
                <input type="text">
                <br>
                <button>Adicionar ao Cardapio</button>
            </form>
        </div>
        <hr>
        <div class="prato">
            <form action="" method="post">
                <h1>Adicionar um prato novo:</h1>
                <!--<input type="file" name="" id="">-->
                <label for="">Nome do Prato:</label>
                <br>
                <input type="text" placeholder="">
                <br>

                <label for="">Selecione uma categoria:</label>
                <div class="select-box">
                    <select name="" id="">
                        <option value="">Selecione</option>
                        <option value="">Option 1</option>
                    </select>
                </div>

                <label for="">Descrição:</label>
                <br>
                <textarea name="" id="" maxlength="200"></textarea>
                <br>
                <button>Adicionar ao Cardapio</button>
            </form>
        </div>

    </div>

    <div class="editar-perfil">
        <form action="" method="post">
            <label for="">Nome do Prato:</label>
            <br>
            <input type="text" >
            <br>
            <label for="">Telefone:</label>
            <br>
            <input type="text" placeholder="Telefone">
            <br>
            <label for="">Horário de Funcionamento</label>
            <br>
            <label for=""> Início:</label>
            <input type="time" name="" id="">
            <br>
            <label for=""> Final:</label>
            <input type="time" name="" id="">
            <br>
            <label for="">Descrição:</label>
            <br>
            <textarea name="" id="" maxlength="180" placeholder="Descrição"></textarea>
            <br>
            <button>Salvar</button>

        </form>


    </div>

    <div class="historico-de-pedidos">

    </div>



</body>

</html>