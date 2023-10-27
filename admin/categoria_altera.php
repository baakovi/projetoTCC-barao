<?php

    require_once('../conexao/conecta.php');

    if(isset($_GET['id_categoria'])&&$_GET['id_categoria']!=''){
        $id=$_GET['id_categoria'];
        $sqlcategoria="SELECT*FROM categorias WHERE id_categoria=$id";
        $resultadocategoria=mysqli_query($conexao, $sqlcategoria);
        $linhacategoria=mysqli_fetch_assoc($resultadocategoria);
    }
    if(isset($_POST['alterar'])&&$_POST['alterar']==='altera_categoria'){
        $id=$_POST['id_categoria'];
        $valor=mysqli_real_escape_string($conexao, $_POST['valor']);
        $label=mysqli_real_escape_string($conexao, $_POST['label']);
        $sql="UPDATE categorias SET valor='$valor', label='$label' WHERE id_categoria=$id";
        if(mysqli_query($conexao, $sql)){
            header('Location:categorias.php');
        }
        else{
            die("Erro: ".$sql."<br>".mysqli_error($conexao));
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altera Categoria</title>
</head>
<body>
<div class="container-fluid">
  <div class="row">

    <main>
      <div>
        <h1>Administração</h1>
      </div>

    <h2>Categorias Altera</h2>
    <div>
        <h4>Dados da categoria</h4>
        <form class="needs-validation" method="POST" action="" novalidate>
          <div class="row">
              
            <div>
              <label for="valor" class="form-label">Abreviação</label>
              <input type="text" class="form-control" id="valor" name="valor" maxlength="3" value="<?php echo $linhacategoria['valor']?>" required>
              <div class="invalid-feedback">
                Informe o campo abreviado.
              </div>
            </div>

            <div>
              <label for="label" class="form-label">Legenda</label>
              <input type="text" class="form-control" id="label" name="label" value="<?php echo $linhacategoria['label']?>" required>
              <div class="invalid-feedback">
                Informe a categoria do produto.
              </div>
            </div>


          <hr>
          <input type="hidden" name="alterar" value="altera_categoria">
          <input type="hidden" name="id_categoria" value="<?php echo $linhacategoria['id_categoria']?>">
          <button type="submit">Alterar Categoria</button>
        </form>
      </div>
    </main>
  </div>
</div>
    
</body>
</html>