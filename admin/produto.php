<?php
  require_once('../conexao/conecta.php');
  if(isset($_GET['id_produto'])&&$_GET['id_produto']!=''){
    $id_produto=$_GET['id_produto'];
    $sql="SELECT*FROM produtos WHERE id_produto=$id_produto";
    $resultado=mysqli_query($conexao, $sql);
    $linha=mysqli_fetch_assoc($resultado);
    $quantidade=mysqli_num_rows($resultado);
  }
  else{
    $quantidade=0;
  }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACABA PELO AMOR DE DEUS</title>
</head>
<body>

  <!-- Início do Header -->

<section id="topo">

<?php

include_once 'topo.php';

?>

<!-- Fim do Header -->

<?php if($quantidade > 0){?>
    <div>
      <div>
        <h2><?php echo $linha['nome_produto']?></h2>
        <?php if($linha['imagem_produto']!=''){?>
        <img src="../Produtos/<?php echo $linha['imagem_produto']?>" alt="<?php echo $linha['nome_produto']?>" class="img-fluid">
        <?php }?>
        <p><?php echo $linha['descricao_produto']?></p>
        <p><?php echo $linha['detalhes_produto']?></p>
        <a href="javascript:history.back();" class="btn btn-primary">Voltar</a>
      </div>
    </div>
    <?php }?>
    <?php if($quantidade <= 0){?>
    <div>
      <div>
        <h2>Não existe nenhum produto selecionado para ser exibido!</h2>
      </div>
    </div>
    <?php }?>
</body>
</html>