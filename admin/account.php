<?php

require_once('../conexao/conecta.php');

session_start();

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">

    <title>Minha Conta | Étiquette</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link href="https://fonts.cdnfonts.com/css/monzane" rel="stylesheet">

    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .verticalLine {
            border-left: 4px solid #000;
        }
    </style>

</head>

<body>

    <!-- Início Topo -->

    <?php

    include('topo.php')

    ?>

    <!-- Fim Topo -->

    <!-- Início do Aviso -->

    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8 col-md-6 col-xs-12 col-sm-6 alert pt-5">
                <div class="alert_info"> <button aria-hidden="true" data-dismiss="alert" class="close" type="button" style="padding: 0 10px 0 10px;">&times;</button> <strong>Você acessou sua conta!</strong> </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>

    <!-- Fim do Aviso -->

    <!-- Início da Minha Conta -->

    <section class="account">

        <div class="container" style="padding: 60px 0 60px 0;">

            <div class="row">

                <div class="col-lg-3 p-0">

                    <div class="dados">

                        <h2 class="py-4">
                            <i class="fa-solid fa-circle-user fa-2xl"></i>
                            Olá!
                        </h2>

                        <ul style="padding-left: 0;">

                            <div class="verticalLine">
                                <a href="account.php">
                                    <li>Dados pessoais</li>
                                </a>
                            </div>

                            <a href="addresses.php">
                                <li>Endereço</li>
                            </a>

                            <a href="orders.php">
                                <li>Pedidos</li>
                            </a>

                            <a href="cards.php">
                                <li>Cartões</li>
                            </a>

                            <a href="wishlist.php">
                                <li>Lista de desejos</li>
                            </a>

                            <!-- Button trigger modal -->
                            <li type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Sair
                            </li>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                <div class="modal-dialog modal-dialog-centered">

                                    <div class="modal-content">

                                        <div class="modal-header" style="border: none;">

                                            <h1 class="modal-title fs-5 lanc-text" id="exampleModalLabel">Deseja mesmo sair?</h1>

                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                                        </div>

                                        <div class="modal-body"></div>

                                        <div class="modal-footer" style="border: none;">

                                            <button type="button" class="btn btn-modal" data-bs-dismiss="modal"><a data-bs-dismiss="modal">CANCELAR</a></button>

                                            <div style="margin-left: 20px;">

                                                <button type="button" class="btn btn-dark"><a href="logoff.php">SAIR</a></button>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </ul>

                    </div>

                </div>

                <div class="col-lg-5 p-0">

                    <h1 class="text-profile pt-5 mt-4">Dados pessoais</h1>

                    <div class="profile">

                        <form action="">

                            <label for="name">Nome</label>
                            <p>
                                Name
                                <?php
                                
                                // echo . $email                            

                                ?>
                            </p>
                            <!-- Lógica: aparecer o nome da pessoal de acordo com o banco de dados -->

                            <label for="name">Sobrenome</label>
                            <!-- Lógica: aparecer o sobrenome da pessoa de acordo com o banco de dados -->

                            <br>

                            <label for="email">Email</label>
                            <!-- Lógica: aparecer o email da pessoa de acordo com o banco de dados -->

                            <br>

                            <label for="cpf">CPF</label>

                            <label for="gender">Gênero</label>

                            <br>

                            <label for="date">Data de Nascimento</label>

                            <label for="number">Telefone</label>

                            <button class="btn btn-label" style="float: right;"><a href="">Editar</a></button>

                        </form>



                    </div>

                </div>

                <div class="col-lg-4 p-4" style="margin-top: 104px;">

                    <div class="profile">

                        <h5 class="m-0">Newsletter</h6>
                            <h6 class="text-muted">Deseja receber e-mail com promoções?</h6>

                            <div class="form-check pt-3">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Quero receber e-mails com promoções.
                                </label>
                            </div>

                            <button class="fancy">Ofertas</button>

                    </div>

                </div>

            </div>

    </section>

    <!-- Fim da Minha Conta -->

    <!-- Início Rodapé -->

    <?php

    include('footer.php')

    ?>

    <!-- Fim Rodapé -->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v5.8.1/css/all.css"></script>

</body>

</html>