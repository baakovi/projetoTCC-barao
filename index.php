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

    <title>Étiquette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="a.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Início do Header -->

    <section id="topo">

        <?php

        include_once 'header.php';

        ?>

        <!-- Fim do Header -->

        <!-- Início do Banner -->

        <div class="banner">

            <div class="row m-0">

                <div class="col-lg-12 text-center">

                    <p></p>

                    <h1 class="display-2 text-white banner-text">Peças feitas à mão</h1>

                    <a href="404/error.php" class="btn-banner btn-banner2">Acesse aqui</a>

                </div>

            </div>

        </div>

    </section>

    <!-- Final do Banner -->

    <!-- Início Apresentação -->

    <div class="container-fluid" style="background-color: #7E8987;">

        <div class="row p-5">

            <div class="col-lg-12 text-center">

                <p><strong><i>étiquette</i></strong></p>

                <h2 class="lanc-text">Distinção e Charme</h2>

            </div>

            <div class="col-3"></div>

            <div class="col-6 text-center pt-4">

                <p>Aqui, a elegância encontra a sofisticação, e a moda se torna uma declaração de estilo pessoal. Desde peças clássicas até as últimas tendências, estamos comprometidos em oferecer qualidade impecável e design excepcional.</p>

            </div>

            <div class="col-3"></div>

        </div>

        <hr>

    </div>

    <!-- Final Apresentação -->

    <!-- Início dos Lançamentos -->

    <div class="container">

        <div class="row g-4 p-5">

            <div class="col-12 text-center justify-center">
                <h1 class="lanc-text display-4">Lançamentos</h1>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="p-3 test">
                    <img src="Produtos/Lancamentos/lanc1.png" class="img" alt="Abotuadura em Formato de Caracal">
                    <div class="card-body">
                        <h5 class="lanc-text">Abotoadura Caracal</h5>
                        <p class="img-text">A abotoadura de Caracal, é o acessório perfeito para trazer elegância, e também um toque único ao seu estilo. Feito com ouro 10 quilates, o acessório possui formato de um gato selvagem, o Caracal.</p>

                        <p class="pt-4">R$ 1.380,00</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="p-3">
                    <img src="Produtos/Lancamentos/lanc2.png" class="img" alt="Abotuadura em Formato de Dragão Oriental">
                    <div class="card-body">
                        <h5 class="lanc-text">Abotoadura Dragão Oriental</h5>
                        <p class="img-text">A abotoadura de Ryu, ou Dragão Oriental, é um acessório que além de trazer sofisticação à sua vestimenta, também carrega consigo o simbolo de poder e proteção. Feito com ouro 18 quilates.</p>
                        <p>R$ 3.000,00</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="p-3">
                    <img src="Produtos/Lancamentos/lanc3.png" class="img" alt="Abotuadura em Formato de Tigre Branco">
                    <div class="card-body">
                        <h5 class="lanc-text">Abotoadura Tigre Branco</h5>
                        <p class="img-text">A abotoadura Tigre Branco, consiste em um acessório de alta qualidade, que traz ao seu estilo fineze. O apetrecho conta com o formato de um tigre, e é feito com ouro branco.</p>
                        <p class="pt-4">R$ 4.500,00</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="p-3">
                    <img src="Produtos/Lancamentos/lanc4.png" class="img" alt="Abotuadura em Formato de Coroa">
                    <div class="card-body">
                        <h5 class="lanc-text">Abotoadura Coroa</h5>
                        <p class="img-text">Coroa é a abotoadura perfeita para ocasiões importantes onde você quer passar, respeito e elegância. Feita com prata 925, o acessório conta com o formato mais conhecido na realeza: a Coroa.</p>
                        <p class="pt-4">R$ 950,00</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="p-3">
                    <img src="Produtos/Lancamentos/lanc5.png" class="img" alt="Broche com Formato de Coroa de Rainha">
                    <div class="card-body">
                        <h5 class="lanc-text">Broche Reinado</h5>
                        <p class="img-text">Reinado consiste no broche perfeito para ocasiões em que necessitam de descate e sofisticação. O acessório é feito com ouro 18 quilates, e conta também com pequenos pedaços do diamante Cullinan, encontrados também na coroa britânica.</p>
                        <p class="pt-2">R$ 10.000,00</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="p-3">
                    <img src="Produtos/Lancamentos/lanc6.png" class="img" alt="Broche com Formato de Gavião">
                    <div class="card-body">
                        <h5 class="lanc-text">Broche Gavião</h5>
                        <p class="img-text">O broche Gavião traz consigo elegância e singularidade. O acessório foi esculpido em ouro maciço de 14 quilates, e conta também com um pequeno pedaço do diamante Centenário.</p>
                        <p class="pt-5 mt-5">R$ 8.000,00</p>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4">
                <div class="p-3">
                    <img src="Produtos/Lancamentos/lanc7.png" class="img" alt="Broche com uma Pedra Vermelha">
                    <div class="card-body">
                        <h5 class="lanc-text">Broche Red Shield</h5>
                        <p class="img-text">Red Shield consite em um deslumbrante broche feito com diamente Hancock Red, serve para ocasiões importantes onde a sofisticação e fineze são o foco. Feito com ouro 24 quilates, o broche conta também com pequenos diamantes de calibre.</p>
                        <p class="pt-4 mt-4">R$ 23.000,00</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-4" style="opacity: 0.5;">
                <div class="p-3">
                    <img src="Produtos/Lancamentos/lanc8.png" class="img" alt="Broche com Formato de Brasão do Rei" style="filter: grayscale(100%);">
                    <div class="card-body">
                        <h5 class="lanc-text">Broche Brasão do Rei</h5>
                        <p class="img-text">O broche Brasão do Rei, esculpido em ouro branco é uma peça de joia elegante e distintiva que apresenta um design único.</p>
                        <p style="cursor: not-allowed;"><code>Indisponível</code></p>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- Final dos Lançamentos -->

    <!-- Início do Rodapé -->

    <?php

    include_once 'rodape.php';

    ?>

    <!-- Fim do Rodapé -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>