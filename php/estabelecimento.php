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
    <!--Cria o script dos botões-->

    <div id="box">
        <div class="container" id="container">
            <img src="../img/teste.jpg" alt="">
            <button name="historico" onclick="showHistorico()">Histórico de Pedidos</button>
            <button name="perfil" onclick="editarPerfil()">Editar Perfil</button>
            <button name="cardapio" onclick="editarCardapio()">Cardápio</button>
            <button>Sair</button>

        </div>

        <div class="pedido">
            <table>
                <tr>
                    <!-- ADICIONAR A FUNÇÃO DE ABRIR PEDIDO-->
                    <td onclick="abrirPedido()">
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td onclick="abrirPedido()">
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td onclick="abrirPedido()">
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                </tr>
                <tr>
                    <td onclick="abrirPedido()">
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td onclick="abrirPedido()">
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>
                    <td onclick="abrirPedido()">
                        <h1>PED 001</h1>
                        <h3>Yasmin Carvalho</h3>

                        <a href="">Entregar</a>
                    </td>

                </tr>

                <tr>
                    <td>
                        <h1>PED 002</h1>
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

    <div class="pedido-detalhado" id="pedidodetalhado">
        <i class="fa fa-times" aria-hidden="true" onclick="fecharAba()"></i>
        <div class="nome-cliente">
            <h3>Nome:Yasmin Carvalho</h3>
        </div>
        <hr>
        <div class="pedido-cliente">
            <h4>Pedido:</h4>
            <table>
                <tr>
                    <th>Qtd.</th>
                    <th>Nome do Produto</th>
                    <th>Valor</th>
                </tr>
                <tr>
                    <td>3</td>
                    <td>temaki</td>
                    <td>30,00</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Barca</td>
                    <td>70,00</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Yakisoba</td>
                    <td>40,00</td>
                </tr>
            </table>
            <h4>Valor total: 140,00</h4>
        </div>
        <hr>
        <div class="descricao-cliente">
            <h4>Descrição:</h4>
            <p>toda a descrição de informações extra</p>
        </div>
        <hr>
        <div class="pagamento-cliente">
            <h4>Metodo de pagamento:</h4>
            <h3>Cartão</h3>
        </div>
        <hr>
        <div class="endereco-cliente">
            <h4>Endereço:</h4>
            <p>Endereço: pipipi popopo pipi popop</p>
        </div>

        <button>Entregar</button>
    </div>


    <!-- FILE IMAGE NO CARDAPIO:-->

    <div class="cardapio" id="cardapio">
        <i class="fa fa-times" aria-hidden="true" onclick="fecharAba()"></i>
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
                <input type="text" placeholder=" Nome do Prato">
                <br>
                <label for=""> Foto:</label>
                <input type="file" id="actual-btn" class="file-close">
                <label for="actual-btn" class="file">Escolha uma Foto</label>
                <span id="file-chosen">Nenhum Arquivo Selecionado</span>

                <br>
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


    <div class="editar-perfil" id="perfil">
        <i class="fa fa-times" aria-hidden="true" onclick="fecharAba()"></i>
        <form action="" method="post">
            <label for="">Nome:</label>
            <br>
            <input type="text" placeholder="Nome">
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

    <div class="historico-de-pedidos" id="historico">
        <i class="fa fa-times" aria-hidden="true" onclick="fecharAba()"></i>
        <label for="">Procurar Pedido:</label>
        <div class="procurar">

            <i class="fa fa-search" aria-hidden="true"></i>
            <input type="text" name="" id="spaceprocurar" placeholder="Buscar..." list="historico">
            <datalist id="historico">
                <option value="Chine Box"></option>
                <option value="Restaurante"></option>
            </datalist>

        </div>

        <table>
            <tr>
                <!-- NO MÁXIMO 3 COLUNAS UMAS COM A DATA E OUTRA COM AS INFORMAÇÕES-->
                <td>
                    <!-- Data do pedido quando foi entregue-->
                    <h4>Data:22/01/2000</h4>
                </td>
                <td>
                    <!-- Nome Cliente, CPF e Pedido-->
                    <h4>Yasmin Carvalho</h4>
                    <p>CPF</p>
                    <p>Pediu: Temaki de camarão</p>
                </td>
                <td>
                    <!-- Método de pagamento -->
                    <h4>Cartão</h4>
                </td>
            </tr>

            <tr>
                <!-- NO MÁXIMO 3 COLUNAS UMAS COM A DATA E OUTRA COM AS INFORMAÇÕES-->
                <td>
                    <!-- Data do pedido quando foi entregue-->
                    <h4>Data:22/01/2000</h4>
                </td>
                <td>
                    <!-- Nome Cliente, CPF e Pedido-->
                    <h4>Yasmin Carvalho</h4>
                    <p>CPF</p>
                    <p>Pediu: Temaki de camarão</p>
                </td>
                <td>
                    <!-- Método de pagamento -->
                    <h4>Cartão</h4>
                </td>
            </tr>

            <tr>
                <!-- NO MÁXIMO 3 COLUNAS UMAS COM A DATA E OUTRA COM AS INFORMAÇÕES-->
                <td>
                    <!-- Data do pedido quando foi entregue-->
                    <h4>Data:22/01/2000</h4>
                </td>
                <td>
                    <!-- Nome Cliente, CPF e Pedido-->
                    <h4>Yasmin Carvalho</h4>
                    <p>CPF</p>
                    <p>Pediu: Temaki de camarão</p>
                </td>
                <td>
                    <!-- Método de pagamento -->
                    <h4>Cartão</h4>
                </td>
            </tr>
            <tr>
                <!-- NO MÁXIMO 3 COLUNAS UMAS COM A DATA E OUTRA COM AS INFORMAÇÕES-->
                <td>
                    <!-- Data do pedido quando foi entregue-->
                    <h4>Data:22/01/2000</h4>
                </td>
                <td>
                    <!-- Nome Cliente, CPF e Pedido-->
                    <h4>Yasmin Carvalho</h4>
                    <p>CPF</p>
                    <p>Pediu: Temaki de camarão</p>
                </td>
                <td>
                    <!-- Método de pagamento -->
                    <h4>Cartão</h4>
                </td>
            </tr>
            <tr>
                <!-- NO MÁXIMO 3 COLUNAS UMAS COM A DATA E OUTRA COM AS INFORMAÇÕES-->
                <td>
                    <!-- Data do pedido quando foi entregue-->
                    <h4>Data:22/01/2000</h4>
                </td>
                <td>
                    <!-- Nome Cliente, CPF e Pedido-->
                    <h4>Yasmin Carvalho</h4>
                    <p>CPF</p>
                    <p>Pediu: Temaki de camarão</p>
                </td>
                <td>
                    <!-- Método de pagamento -->
                    <h4>Cartão</h4>
                </td>
            </tr>
            <tr>
                <!-- NO MÁXIMO 3 COLUNAS UMAS COM A DATA E OUTRA COM AS INFORMAÇÕES-->
                <td>
                    <!-- Data do pedido quando foi entregue-->
                    <h4>Data:22/01/2000</h4>
                </td>
                <td>
                    <!-- Nome Cliente, CPF e Pedido-->
                    <h4>Yasmin Carvalho</h4>
                    <p>CPF</p>
                    <p>Pediu: Temaki de camarão</p>
                </td>
                <td>
                    <!-- Método de pagamento -->
                    <h4>Cartão</h4>
                </td>
            </tr>
            <tr>
                <!-- NO MÁXIMO 3 COLUNAS UMAS COM A DATA E OUTRA COM AS INFORMAÇÕES-->
                <td>
                    <!-- Data do pedido quando foi entregue-->
                    <h4>Data:22/01/2000</h4>
                </td>
                <td>
                    <!-- Nome Cliente, CPF e Pedido-->
                    <h4>Yasmin Carvalho</h4>
                    <p>CPF</p>
                    <p>Pediu: Temaki de camarão</p>
                </td>
                <td>
                    <!-- Método de pagamento -->
                    <h4>Cartão</h4>
                </td>
            </tr>
        </table>
    </div>
    <script src="../js/file.js"></script>
    <script src="../js/estabelecimento.js"></script>

</body>

</html>