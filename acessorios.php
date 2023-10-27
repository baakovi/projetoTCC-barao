<?php

require_once('conexao/conecta.php');

// $query = "SELECT imagem_produto AND descricao_produto FROM produtos";

// $result = mysqli_query($query, $conexao);

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <link rel="shortcut icon" href="Logo/icone.ico" type="image/x-icon">

    <title>Acessórios - Étiquette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="a.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        /* Para os Produtos */

        .cinto1:hover {
            content: url(Produtos/Acessorio/Cinto/cinto13.png);
        }

        .cinto4:hover {
            content: url(Produtos/Acessorio/Cinto/cinto7.png);
        }

        .borb1:hover {
            content: url(Produtos/Acessorio/Gravata/borboleta/borb15_2.png);
        }

        .borb2:hover {
            content: url(Produtos/Acessorio/Gravata/borboleta/borb2_2.png);
        }

        .borb3:hover {
            content: url(Produtos/Acessorio/Gravata/borboleta/borb3_2.png);
        }

        .borb4:hover {
            content: url(Produtos/Acessorio/Gravata/borboleta/borb16_2.png);
        }
    </style>

</head>

<body>

    <!-- Início do Header -->

    <?php

    include('header.php')

    ?>

    <!-- Fim do Header -->

    <!-- Início da Amostra -->

    <section class="acessorios">

        <div class="container">

            <div class="row">

                <div class="col-lg-12 text-center" style="margin: 10% 0 10% 0;">

                    <h1 class="amostra-text">Cintos, gravatas e suspensórios para complementar o seu estilo</h1>

                </div>

                <hr>

                <div class="col-12 py-5"></div>

                <!-- Conjunto 1 -->
                <!-- Produto 1 -->
                <!-- Teste (Vou deixar o form comentado por enquanto) -->
                <!-- <form action="admin/criar.php" method="post"> -->
                    <div class="col-lg-3 col-md-4 col-sm-2">
                        <div class="accordion-wrap">
                            <a class="accordion" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="false">
                                <div class="card">
                                    <img src="Produtos/Acessorio/Cinto/cinto12.png" class="card-img-top cinto1" alt="Cinto de Couro de Jacaré">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Cinto de Couro de Jacaré</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$230,00</h6>
                                    </div>
                                </div>

                            </a>
                            <div class="collapse" id="collapseOne">
                                <div class="accordion-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Cor</th>
                                                <td>Preto Fosco</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Estilo</th>
                                                <td>Cinto</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Composição</th>
                                                <td>100% Couro de Jacaré</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Código</th>
                                                <td>A4B7C2D8E9F</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Marca</th>
                                                <td><i>Étiquette</i></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                        <form action="">
                                            <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- </form> -->

                <!-- Produto 2 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Cinto/cinto15.png" class="card-img-top" alt="Cinto de Couro de Micélio">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Cinto de Couro de Micélio</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$280,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTwo">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Preto Fosco</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Cinto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro de Micélio</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>A2B9C4D7E1</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Cinto/cinto11.png" class="card-img-top" alt="Cinto de Couro de Micélio">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Cinto de Couro de Micélio</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$289,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseThree">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Preto Fosco</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Cinto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro de Micélio</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>X8Y3Z6W0V2</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Cinto/cinto.png" class="card-img-top cinto4" alt="Cinto de Couro de Jacaré">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Cinto de Couro de Jacaré</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$230,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFour">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Preto Fosco</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Cinto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Couro de Jacaré</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>D5E2F9G4H1</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 1 -->

                <div class="col-12 py-5"></div>

                <!-- Conjunto 2 -->
                <!-- Produto 1 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/grav1.png" class="card-img-top" alt="Gravata Regular">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Regular</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFive">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Preto</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Lã</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>M5N1P9Q7R4</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 2 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/grav2.png" class="card-img-top" alt="Gravata Regular">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Regular</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSix">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Space Cadet</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Lã</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>F6G2H8I3J0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/grav7.png" class="card-img-top" alt="Gravata Regular">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Regular</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$250,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSeven">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Shadow Blue</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Seda</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>K9L4O7T1U5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/grav6.png" class="card-img-top grav4" alt="Gravata Regular">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Regular</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$250,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseEight">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Outer Space</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Regular</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Seda</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>R3S8T1U7V0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 2 -->

                <div class="col-12 py-5"></div>

                <!-- Conjunto 3 -->
                <!-- Produto 1 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/borboleta/borb15.png" class="card-img-top borb1" alt="Gravata Borboleta">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Borboleta</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$220,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseNine">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Dark Purple</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Borboleta</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Linho</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>I6J3K0L7M8</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 2 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/borboleta/borb2.png" class="card-img-top borb2" alt="Gravata Borboleta">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Borboleta</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Medium Jungle Green</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Borboleta</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Algodão</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>N9O4P5Q2W6</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseEleven" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/borboleta/borb3.png" class="card-img-top borb3" alt="Gravata Borboleta">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Borboleta</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$190,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseEleven">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Burnt Umber</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Borboleta</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Lã</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>X8Y7Z1A0B3</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTwelve" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Gravata/borboleta/borb16.png" class="card-img-top borb4" alt="Gravata Borboleta">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Gravata Borboleta</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$190,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTwelve">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Khaki</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Borboleta</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Lã</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>C6F8G1H9I0</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 3 -->

                <div class="col-12 py-5"></div>

                <!-- Conjunto 4 -->
                <!-- Produto 1 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseThirteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Suspensorio/susp14.png" class="card-img-top" alt="Suspensório">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Suspensório</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseThirteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Eerie Black</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Elástico</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>72% Poliéster e 28% Borracha</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>J2K4L5M7N3</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 2 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFourteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Suspensorio/susp7.png" class="card-img-top" alt="Suspensório">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Suspensório</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFourteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Gunmeta</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Elástico</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>72% Poliéster e 28% Borracha</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>P6Q9R0S2T5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 3 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFifteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Suspensorio/susp2.png" class="card-img-top" alt="Suspensório">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Suspensório</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFifteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Temptress</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Elástico</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>72% Poliéster e 28% Borracha</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>U3V2W1X0Y9</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 4 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSixteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Acessorio/Suspensorio/susp1.png" class="card-img-top" alt="Suspensório">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Suspensório</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSixteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Puce Red</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Elástico</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>72% Poliéster e 28% Borracha</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>B4C7D6E5F8</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" name="adicionar_carrinho" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 4 -->

                <div class="col-12 py-5"></div>

            </div>

        </div>

    </section>
    <!-- Fim da Amostra -->

    <!-- Início da Verificação -->

    <div class="container">

        <div class="row">

            <hr>

            <div class="col-12 text-center py-4">

                <h6>Verificado por
                    <a href="https://judge.me/" target="_blank" style="color: #1446A0">Judge.me</a>
                    <i class="fa-solid fa-user-check" style="padding-left: 5px"></i>
                </h6>

                <h6>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    104 comentários
                </h6>

            </div>

        </div>

    </div>

    <!-- Final da Verificação -->

    <!-- Início do Rodapé -->

    <?php

    include('rodape.php');

    ?>

    <!-- Fim do Rodapé -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>