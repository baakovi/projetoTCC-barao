<?php
    require_once('../conexao/conecta.php');
    if(isset($_POST['inserir'])&&$_POST['inserir']==='insere_produto'){
        $arquivo=basename($_FILES['imagem_produto']['name']);
        $temp=$_FILES['imagem_produto']['tmp_name'];
        $final="../produtos/".$arquivo;
        move_uploaded_file($temp, $final);
        $preco=mysqli_real_escape_string ($conexao, $_POST['preco']);
        $categoria=$_POST['categoria'];
        $nome=mysqli_real_escape_string   ($conexao, $_POST['nome_produto']);
        $descricao=mysqli_real_escape_string($conexao, $_POST['descricao_produto']);
        $detalhes=mysqli_real_escape_string($conexao, $_POST['detalhes_produto']);
        $destaque=$_POST['destaque'];
        $sql="INSERT INTO produtos(preco, categoria, nome_produto, descricao_produto, detalhes_produto, imagem_produto, destaque) VALUES('$preco', '$categoria', '$nome', '$descricao', '$detalhes', '$arquivo', '$destaque')";
        if(mysqli_query($conexao, $sql)){
            header('Location:produtos.php');
        }
        else{
            die("Erro: ".$sql."<br>".mysqli_error($conexao));
        }
    }
    if(isset($_GET['id_produto'])&&$_GET['id_produto']!=''){
        $id=$_GET['id_produto'];
        $sqlproduto="SELECT*FROM produtos WHERE id_produto=$id";
        $resultadoproduto=mysqli_query($conexao, $sqlproduto);
        $linhaproduto=mysqli_fetch_assoc($resultadoproduto);
      }
      $sqlcategoria="SELECT*FROM categorias ORDER BY label ASC";
      $resultadocategoria=mysqli_query($conexao, $sqlcategoria);
      $linhacategoria=mysqli_fetch_assoc($resultadocategoria);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Inserir</title>
</head>
<body>
<div class="container-fluid">
  <div class="row">

    <main>
      <div>
        <h1 class="h2">Administração</h1>
      </div>

    <h2>Produtos Insere</h2>
    <div>
        <h4>Dados do produto</h4>
        <form class="needs-validation" method="POST" action="" enctype="multipart/form-data" novalidate>
          <div>

          <div>
              <label for="preco" class="form-label">Preço</label>
              <input type="number" class="form-control" id="preco" name="preco" placeholder="Preço do produto" required>
            </div>  
          
          <div>
              <label for="categoria" class="form-label">Categoria</label>
              <select class="form-select" id="categoria" name="categoria" required>
                <option value="">- Selecione -</option>
                <option value="cam">Camisa Social</option>
                <option value="ter">Terno</option>
                <option value="pal">Paletó</option>
                <option value="cal">Calça</option>
                <option value="sap">Sapato</option>
                <option value="gra">Gravata</option>
                <option value="sus">Suspensório</option>
                <option value="cin">Cinto</option>
                <option value="col">Colete</option>
              </select>
            </div>

            <div>
              <label for="nome_produto" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do produto" required>
            </div>

            <div>
              <label for="descricao_produto" class="form-label">Descrição</label>
              <textarea class="form-control" id="descricao_produto" name="descricao_produto" rows="2" required></textarea>
            </div>

            <div>
              <label for="detalhes_produto" class="form-label">Detalhes</label>
              <textarea class="form-control" id="detalhes_produto" name="detalhes_produto" rows="3" required></textarea>
            </div>

            <div>
              <label for="imagem_produto" class="form-label">Imagem</label>
              <input type="file" class="form-control" id="imagem_produto" name="imagem_produto">
            </div>

           <div>
           <label for="destaque" class="form-label">Destaque</label>
            <div class="form-check">
              <input id="dsim" name="destaque" value="sim" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="dsim">sim</label>
            </div>
            <div class="form-check">
              <input id="dnao" name="destaque" value="nao" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="dnao">não</label>
            </div>
          </div>

          <hr>
          <input type="hidden" name="inserir" value="insere_produto">
          <button type="submit">Inserir Produto</button>
        </form>
      </div>
    </main>
  </div>
</div>

</body>
</html>