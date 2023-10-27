<?php
require_once('../conexao/conecta.php');
if (isset($_GET['pesquisa']) && $_GET['pesquisa'] != '') {
    $pesquisa = $_GET['pesquisa'];
    $sql = "SELECT id_produto FROM produtos WHERE CONCAT(nome_produto, ' ', descricao_produto, ' ', detalhes_produto) LIKE '%$pesquisa%'";
    $resultado = mysqli_query($conexao, $sql);
    $quantidade = mysqli_num_rows($resultado);

    $pesquisapag = "&pesquisa=" . $_GET['pesquisa'];
    if (isset($_GET['pagina']) && !empty($_GET['pagina'])) {
        $paginaatual = $_GET['pagina'];
    } else {
        $paginaatual = 1;
    }
    $url = "?pagina=";

    $paginaqtdd = 5;

    $valorinicial = ($paginaatual * $paginaqtdd) - $paginaqtdd;
    $paginafinal = ceil($quantidade / $paginaqtdd);
    $paginainicial = 1;
    $paginaproxima = $paginaatual + 1;
    $paginaanterior = $paginaatual - 1;

    $sqlpag = "SELECT*FROM produtos WHERE CONCAT(nome_produto, ' ', descricao_produto, ' ', detalhes_produto) LIKE '%$pesquisa%' ORDER BY id_produto DESC LIMIT $valorinicial, $paginaqtdd";
    $resultadopag = mysqli_query($conexao, $sqlpag);
    $linhapag = mysqli_fetch_assoc($resultadopag);
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TESTE COM T MAIUSCULO</title>
    <link rel="stylesheet" href="./o.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<!-- Início do Header -->

<section id="topo">

<?php

include_once 'topo.php';

?>

<!-- Fim do Header -->

    <div>
        <form action="pesquisa.php" method="GET">
            <input type="search" name="pesquisa" placeholder="Pesquisar..." aria-label="Search">
            <button type="submit"><i class="fa-solid fa-magnifying-glass text-whie w-6 h-6"></i></button>
        </form>
    </div>

    <h2>Resultado da pesquisa para: <?php echo $pesquisa ?></h2>

    <?php if ($quantidade > 0) {
        do { ?>
            <div>
                <a href="produto.php?id_produto=<?php echo $linhapag['id_produto'] ?>">
                    <p><?php $linhapag['nome_produto'] ?>pesquisa</p>
                </a>
            </div>
    <?php } while ($linhapag = mysqli_fetch_assoc($resultadopag));
    } ?>

    <?php if ($quantidade <= 0) { ?>
        <div>
            <p>Nenhum resultado encontrado!</p>
        </div>
    <?php } ?>

    </div>

    <!-- paginação -->
    <nav aria-label="paginacao">
        <ul class="pagination justify-content-center">
            <?php if ($paginaatual != $paginainicial) { ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo $url . $paginainicial . $pesquisapag ?>">Início</a>
                </li>
            <?php } ?>
            <?php if ($paginaatual >= 2) { ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo $url . $paginaanterior . $pesquisapag ?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
            <?php } ?>
            <?php if ($paginaatual != $paginafinal) { ?>
                <li class="page-item">
                    <a class="page-link" href="<?php echo $url . $paginaproxima . $pesquisapag ?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <li class="page-item">
                    <a class="page-link" href="<?php echo $url . $paginafinal . $pesquisapag ?>">Final</a>
                </li>
            <?php } ?>
        </ul>
    </nav>

    </div>
</body>

</html>