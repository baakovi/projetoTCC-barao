<?php

    require_once('../conexao/conecta.php');

    if(isset($_GET['id_categoria'])&&$_GET['id_categoria']!=''){
        $id=$_GET['id_categoria'];
        $sqlcategoria="SELECT id_categoria, valor, label FROM categorias WHERE id_categoria=$id";
        $resultadocategoria=mysqli_query($conexao, $sqlcategoria);
        $linhacategoria=mysqli_fetch_assoc($resultadocategoria);
    }

    if(isset($_POST['remove'])&&$_POST['remove']==='sim'){
        $id=$_POST['id_categoria'];
        $sql="DELETE FROM categorias WHERE id_categoria=$id";
        if(mysqli_query($conexao, $sql)){
            header('Location:categorias.php');
        }
        else{
            die("Erro: ".$sql."<br>".mysqli_error($conexao));
        }
    }
    if(isset($_POST['remove'])&&$_POST['remove']==='nao'){
        header('Location:categorias.php');
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exclui Categoria</title>
</head>
<body>
<div class="container-fluid">
  <div class="row">

    <main>
      <div>
        <h1>Administração</h1>
      </div>

    <h2>Categoria Exclui</h2>
    <div>
        <h4>Você confirma a exclusão da categoria: </h4>
        <form class="needs-validation" method="POST" action="" novalidate>
          <div class="row">

            <div>
              <label for="titulo" class="form-label">Abreviação</label>
              <input type="text" class="form-control" id="valor" name="valor" value="<?php echo $linhacategoria['valor']?>" readonly>
              
            <div>
              <label for="titulo" class="form-label">Legenda</label>
              <input type="text" class="form-control" id="label" name="label" value="<?php echo $linhacategoria['label']?>" readonly>
            </div>

          <hr>
          <input type="hidden" name="excluir" value="exclui_categoria">
          <input type="hidden" name="id_categoria" value="<?php echo $linhacategoria['id_categoria']?>">
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