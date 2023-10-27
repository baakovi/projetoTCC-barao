<!doctype html>

<html lang="pt-br">

<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="tf.css">

</head>

<body>

    <!-- Header -->

    <div class="container-fluid justify-content-center" style="background-color: #F5FBEF;">

        <div class="row">

            <div class="col-lg-12">

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner mt-2">
                        <div class="carousel-item active">
                            <p class="text-center">Frete grátis a partir de R$ 500,00</p>
                        </div>

                        <div class="carousel-item">
                            <p class="text-center">12x Sem Juros</p>
                        </div>

                        <div class="carousel-item">
                            <p class="text-center">Brindes exclusivos</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <nav class="py-3" style="background-color: #0B161E;">

        <header class="m-3">
            <div class="container-fluid d-flex flex-wrap justify-content-center">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto link-body-emphasis text-decoration-none">
                    <img src="../Logo/etiquette_logo.png" alt="Logo da Étiquette" width="180">
                </a>

                <!-- component -->
                <form action="pesquisa.php" method="GET">
                    <div>

                        <div class="p-2 py-6 search-input">

                            <input class="text-input" type="text" placeholder="Pesquisar...">

                            <button class="search-button btn"><i class="fa-solid fa-magnifying-glass text-white w-6 h-6"></i></button>

                        </div>

                    </div>

                </form>

            </div>
        </header>

        <div class="container-fluid d-flex flex-wrap" style="justify-content: space-around;">
            <!-- me auto: centraliza? -->

            <!-- AVISO: <a></a> com './404/error.php' são arquivos incompletos que não foram feitos/finalizados, levando para uma página de erro -->
            <ul class="nav">
                <li class="nav-item"><a href="../index.php" class="nav-link" aria-current="page">Home</a></li>

                <!-- MODAL -->

                <!-- Button trigger modal -->
                <a type="button" class="btn modal-btn nav-link" data-bs-toggle="modal" data-bs-target="#Modal">
                    Categorias
                </a>

                <!-- Modal -->
                <div class="modal modal-sm fade" id="Modal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px); box-shadow: none;">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-body text-center">
                                <h3 class="lanc-text" style="padding: 15px 0 15px 0; cursor: pointer;">Escolha sua categoria</h3>

                                <hr class="hr-modal">

                                <ul style="list-style: none; text-decoration: none; padding: 0">
                                    <li><a class="nav-modal" href="../ternos.php">Terno</a></li>
                                    <li><a class="nav-modal" href="../camisas.php">Camisa</a></li>
                                    <li><a class="nav-modal" href="../paletos.php">Paletó</a></li>
                                    <li><a class="nav-modal" href="../calcas.php">Calça</a></li>
                                    <li><a class="nav-modal" href="../sapatos.php">Sapato</a></li>
                                    <li><a class="nav-modal" href="../coletes.php">Colete</a></li>
                                    <li><a class="nav-modal" href="../acessorios.php">Acessório</a></li>
                                </ul>
                                <!-- <a href="logoff.php"></a> -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- FIM MODAL -->

                <li class="nav-item"><a href="../404/blog.php" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="../404/faq.php" class="nav-link">FAQ</a></li>
                <li class="nav-item"><a href="../404/casamentos.php" class="nav-link">Casamentos</a></li>
                <li class="nav-item">
                    <a href="#" class="nav-link disabled text-white" aria-disabled="true">
                        <i class="fa-solid fa-user-check" style="padding-right: 10px"></i>
                        Minha conta
                    </a>
                </li>

                <!-- OFFCANVAS -->
                <li class="nav-item nav-link" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"><i class="fa-solid fa-cart-shopping" style="padding-right: 10px;"></i> Carrinho</li>


                <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title drop" id="offcanvasRightLabel">
                            <button type="button" class="btn" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-chevron-right" style="color: gray;"></i></button>
                            <img width="25" height="25" src="../Icons/cestinha.png" alt="Cesta de Compras">
                            Meu Carrinho
                        </h5>
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button> -->
                    </div>
                    <div class="offcanvas-body">
                        <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%"></div>
                        </div>

                        <!-- BARRA LATERAL DO SITE (SE DER MERDA APAGA) -->

                        <div class="barraLateral">

                            <div class="topoCarrinho">
                                <p>Meu Carrinho</p>
                            </div>

                            <!-- INÍCIO PRODUTO CARRINHO -->

                            <div class="item-carrinho">
                                <div class="linha-da-imagem">
                                    <img src="Produtos/Acessorio/Cinto/cinto12.png" alt="" class="img-carrinho">
                                </div>
                                <p>ATUALIZAR AQUI</p>
                                <h4>R$200,00</h4>
                                <form action="admin/excluir.php" method="post">
                                    <input type="hidden" name="id_produto" value="">
                                    <button type="submit" style="border:none; background:none;"><i class="fa-solid fa-trash" style="color: #7E8987;"></i></button>
                                </form>
                            </div>

                            <!-- FIM PRODUTO CARRINHO -->

                            <div class="item-carrinho-vazio">Seu carrinho está vazio!</div>

                            <div class="rodape">
                                <h3>Total</h3>
                                <h4>R$200,00</h4>
                            </div>

                        </div>

                        <!-- FIM BARRA LATERAL DO SITE-->

                    </div>
                </div>
                <!-- END OFFCANVAS -->
            </ul>
        </div>

    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>

</body>

</html>