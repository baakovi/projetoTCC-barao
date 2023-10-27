<?php

    require_once('../conexao/conecta.php');
    if(isset($_POST['inserir'])&&$_POST['inserir']==='insere_categoria'){
        $valor=mysqli_real_escape_string($conexao, $_POST['valor']);
        $label=mysqli_real_escape_string($conexao, $_POST['label']);
        $sql="INSERT INTO categorias(valor, label) VALUES('$valor', '$label')";
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
    <title>Inserir Categoria</title>
</head>
<body>
<div class="container-fluid">
  <div class="row">

    <main>
      <div>
        <h1>Administração</h1>
      </div>

    <h2>Categorias Insere</h2>
    <div>
        <h4>Dados da categoria</h4>
        <form class="needs-validation" method="POST" action="" novalidate>
          <div class="row">
              
            <div>
              <label for="valor" class="form-label">Abreviação</label>
              <input type="text" class="form-control" id="valor" name="valor" maxlength="3" required>
            </div>

            <div>
              <label for="label" class="form-label">Legenda</label>
              <input type="text" class="form-control" id="label" name="label" required>
            </div>


          <hr>
          <input type="hidden" name="inserir" value="insere_categoria">
          <button type="submit">Inserir Categoria</button>
        </form>
      </div>
    </main>
  </div>
</div>
    
</body>
</html>