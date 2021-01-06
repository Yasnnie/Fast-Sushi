<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/cardapio.css">
    <link rel="shortcut icon" href="../img/logo.png">
    <title>Cardapio - Fast Sushi</title>
</head>

<body>
    <header>
        <a href="" class="voltar"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
        <div class="perfil-loja">
            <img src="../img/teste.jpg" alt="">
            <h1>Nome Estabelecimento</h1>
            <p>Endereço</p>
            <div>
                <i class="fa fa-phone iconphone" id="phone" aria-hidden="true"></i>
                <label for="phone">Telefone: (09)40028922 </label>
            </div>
            <div class="div-av">
                <input type="checkbox" name="avaliar" id="avaliar">
                <label for="avaliar" class="avaliacao-button">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    Avaliar
                </label>
            </div>
        </div>
    </header>

    <main>
        <!-- CADA DIV VAI SER UMA CATEGORIA-->
        <div class="box-categoria">
            <div class="titulo-categoria">
                <input type="checkbox" id="bebida">
                <label for="bebida">
                    <span class="icon"></span>
                    <h3>Nome Categoria</h3>
                </label>
            </div>
            <div class="cardapio-pratos">
                <img src="../img/teste.jpg" alt="">
                <div class="cardapio-pratos-desc">
                    <h2>Título da comida</h2>
                    <p>Descrição da comida</p>
                </div>
                <div class="quantity">
                    <button class="btn minus1">-</button>
                    <input  id="id_form-0-quantity" min="0" name="form-0-quantity" value="0" min="0"type="number">
                    <button class="btn add1">+</button>
                </div>
            </div>
            <div class="cardapio-pratos">
                <img src="../img/teste.jpg" alt="">
                <div class="cardapio-pratos-desc">
                    <h2>Título da comida</h2>
                    <p>Descrição da comida</p>
                </div>
                <div class="quantity">
                    <button class="btn minus1">-</button>
                    <input  id="id_form-0-quantity" min="0" name="form-0-quantity" value="0" min="0"type="number">
                    <button class="btn add1">+</button>
                </div>
            </div>
         </div>

         <button>Comprar</button>
    </main>




</body>

</html>