<?php

ob_start();
require('../conexao/conecta.php');

$produto = filter_input_array(INPUT_POST, FILTER_DEFAULT);
if(isset($produto['criarProduto'])){
    unset($produto['criarProduto']);
    $produto['capa'] = ($_FILES['capa']['tmp_name'] ? $_FILES['capa'] : null);

    $salvar = new Produtos();
    $salvar->CriarProduto($produto);

    if($salvar->getResultado()){
        header("Location: ".HOME."/acessorios.php?sucesso=true");
    }else{
        header("Location: ".HOME."/acessorios.php?erro=true");
    }
}

?>