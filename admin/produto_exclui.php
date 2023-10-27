<?php

require_once('../conexao/conecta.php');

if(isset($_GET['id_produto'])&&$_GET['id_produto']!=''){
    $id=$_GET['id_produto'];
    $sqlproduto="SELECT id_produto, nome_produto FROM produtos WHERE id_produto=$id";
    $resultadoproduto=mysqli_query($conexao, $sqlproduto);
    $linhaproduto=mysqli_fetch_assoc($resultadoproduto);
}
if(isset($_POST['remove'])&&$_POST['remove']==='sim'){
    $id=$_POST['id_produto'];
    $sql="DELETE FROM produtos WHERE id_produto=$id";
    if(mysqli_query($conexao, $sql)){
        header('Location:produtos.php');
    }
    else{
        die("Erro: ".$sql."<br>".mysqli_errno($conexao));
    }
}
if(isset($_POST['remove'])&&$_POST['remove']==='nao'){
    header('Location:produtos.php');
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Excluir</title>
</head>
<body>
    
<div class="container-fluid">
  <div class="row">

    <main>
      <div>
        <h1 class="h2">Administração</h1>
      </div>

    <h2>Produto Exclui</h2>
    <div>
        <h4>Você confirma a exclusão do produto: </h4>
        <form class="needs-validation" method="POST" action="" novalidate>
          <div class="row">

            <div>
              <label for="nome_produto" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome_produto" name="nome_produto" value="<?php echo $linhaproduto['nome_produto']?>" readonly>
            </div>

          <hr>
          <input type="hidden" name="excluir" value="exclui_produto">
          <input type="hidden" name="id_produto" value="<?php echo $linhaproduto['id_produto']?>">
          <div>
            <button type="submit" value="sim" name="remove">Excluir</button>
            <button type="submit" value="nao" name="remove">Cancelar</button>
         </div>
        </form>
      </div>
    </main>
  </div>
</div>

</body>
</html>