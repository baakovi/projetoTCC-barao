<?php
require_once('conexao/conecta.php');

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">

    <link rel="shortcut icon" href="Logo/icone.ico" type="image/x-icon">

    <title>Ternos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="a.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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

                    <h1 class="amostra-text">Ternos com diversas variações de tecidos, flexíveis para todas as estações</h1>

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
                                    <img src="Produtos/Terno/terno1.png" class="card-img-top Terno1" alt="Terno 1">
                                    <div class="card-body text-center">
                                        <h5 class="card-title">Terno Dark Charcoal</h5>
                                        <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$980,00</h6>
                                    </div>
                                </div>

                            </a>
                            <div class="collapse" id="collapseOne">
                                <div class="accordion-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">Cor</th>
                                                <td>Dark Charcoal</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Estilo</th>
                                                <td>Terno</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Composição</th>
                                                <td>100% algodão</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Código</th>
                                                <td>PRD1234567</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Marca</th>
                                                <td><i>Étiquette</i></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                        <form action="">
                                            <button type="button" class="btn-shop">Adicionar ao carrinho</button>
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
                                <img src="Produtos/Terno/terno2.png" class="card-img-top" alt="Terno 2">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno MSU Green</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.280,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTwo">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>MSU Green</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Linho</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>ABC7890XYZ</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
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
                                <img src="Produtos/Terno/terno3.png" class="card-img-top" alt="Terno 3">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Gunmetal</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.289,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseThree">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Gunmetal</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Linho</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>CODE4567AB</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
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
                                <img src="Produtos/Terno/terno4.png" class="card-img-top Terno4" alt="Terno 4">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Old Mauve</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.930,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFour">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Old Mauve</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Caxemira</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>PROD6543XY</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 py-5"></div>
                <!-- Produto 5 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFive" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno5.png" class="card-img-top" alt="Terno 5">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Claret</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.880,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFive">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Claret</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Lã</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>ITEM5678CD</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 6 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSix" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno6.png" class="card-img-top" alt="Terno 6">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Brick Red</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.680,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSix">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Brick Red</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Veludo</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>1A2B3C4D5</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 7 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSeven" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno7.png" class="card-img-top" alt="Terno ">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno American Purple</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.250,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSeven">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>American Purple</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Linho</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>P9RO988CT7</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 8 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseEight" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno8.png" class="card-img-top grav4" alt="Terno ">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Dark Blue</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.250,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseEight">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Dark Blue</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Algodão</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>NUM5678ABC</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 2 -->

                <div class="col-12 py-5"></div>

                <!-- Conjunto 3 -->
                <!-- Produto 9 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseNine" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno9.png" class="card-img-top borb1" alt="Terno 9">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Davy's Grey</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.990,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseNine">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Davy's Grey</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Linho</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>123XYZ7890</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 10 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno10.png" class="card-img-top borb2" alt="Terno 10">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Charleston Green</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.380,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Charleston Green</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Algodão</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>ITEM4321ZZ</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 11 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseEleven" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno11.png" class="card-img-top borb3" alt="Terno 11">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Maastricht Blue</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.890,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseEleven">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Maastricht Blue</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Lã</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>GOODS5678K</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 12 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseTwelve" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno12.png" class="card-img-top borb4" alt="Terno 12">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno  Outer Space</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$2.000,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseTwelve">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Outer Space</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Caxemira</td>
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
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fim do Conjunto 3 -->

                <div class="col-12 py-5"></div>

                <!-- Conjunto 4 -->
                <!-- Produto 13 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseThirteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno13.png" class="card-img-top" alt="Terno 13">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Eerie Black</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.180,00</h6>
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
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Algodão</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>9876XYZ123</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 14 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFourteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno14.png" class="card-img-top" alt="Terno 14">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Gunmetal Amethyst</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$1.180,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFourteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Gunmetal Amethyst</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Algodão</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>ABCD4321XX</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 15 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseFifteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno15.png" class="card-img-top py-5" alt="Terno 15">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Slate Gray</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$2.000,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseFifteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Slate Gray</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Caxemira</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>999ITEMYYY</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Produto 16 -->
                <div class="col-lg-3 col-md-4 col-sm-2">
                    <div class="accordion-wrap">
                        <a class="accordion" data-toggle="collapse" href="#collapseSixteen" role="button" aria-expanded="false">
                            <div class="card">
                                <img src="Produtos/Terno/terno16.png" class="card-img-top py-5" alt="Terno 16">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Terno Purple Grey</h5>
                                    <h6 class="card-subtitle mb-2 text-body-secondary fw-bold">R$2.000,00</h6>
                                </div>
                            </div>

                        </a>
                        <div class="collapse" id="collapseSixteen">
                            <div class="accordion-body">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="row">Cor</th>
                                            <td>Purple Grey</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Estilo</th>
                                            <td>Terno</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Composição</th>
                                            <td>100% Caxemira</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Código</th>
                                            <td>CODEX12345</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Marca</th>
                                            <td><i>Étiquette</i></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <div class="d-grid gap-2 col-lg-8 mx-auto py-4">
                                    <form action="">
                                        <button type="button" class="btn-shop">Adicionar ao carrinho</button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>