<?php 
// tá tudo funcionando menos a parte da categoria que não tá atualizando e ela fica vazia 

    require_once('../conexao/conecta.php');

    if(isset($_GET['id_produto'])&&$_GET['id_produto']!=''){
        $id=$_GET['id_produto'];
        $sqlproduto="SELECT*FROM produtos WHERE id_produto=$id";
        $resultadoproduto=mysqli_query($conexao, $sqlproduto);
        $linhaproduto=mysqli_fetch_assoc($resultadoproduto);
    }

    $sqlcategoria="SELECT*FROM categorias ORDER BY label ASC";
    $resultadocategoria=mysqli_query($conexao, $sqlcategoria);
    $linhacategoria=mysqli_fetch_assoc($resultadocategoria);

    if(isset($_POST['alterar'])&&$_POST['alterar']==='altera_produto'){
        $id=$_POST['id_produto'];
        $preco=mysqli_real_escape_string ($conexao, $_POST['preco']);
        $categoria=$_POST['categoria'];
        $nome=mysqli_real_escape_string   ($conexao, $_POST['nome_produto']);
        $descricao=mysqli_real_escape_string($conexao, $_POST['descricao_produto']);
        $detalhes=mysqli_real_escape_string($conexao, $_POST['detalhes_produto']);
        $imagem=mysqli_real_escape_string($conexao, $_POST['imagem_produto']);
        $destaque=$_POST['destaque'];
        $sql="UPDATE produtos SET preco='$preco', categoria='$categoria', nome_produto='$nome', descricao_produto='$descricao', detalhes_produto='$detalhes', imagem_produto='$imagem', destaque='$destaque' WHERE id_produto=$id";
        if(mysqli_query($conexao, $sql)){
            header('Location:produtos.php');
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
    <link rel="stylesheet" href="styles.css">
    <title>Alterar</title>
</head>
<body>
    
<div class="container-fluid">
  <div class="row">

    <main>
      <div>
        <h1>Administração</h1>
      </div>

    <h2>Produtos Altera</h2>
    <div>
        <h4>Dados do produto</h4>
        <form class="needs-validation" method="POST" action="" novalidate>
          <div class="row">

            <div>
                <label for="preco" class="form-label">Preço</label>
                <input type="number" class="form-control" id="preco" name="preco" placeholder="Preço do produto" value="<?php echo $linhaproduto['preco']?>" required>
            </div>  
          
            <div>
              <label for="categoria" class="form-label">Categoria</label>
              <select class="form-select" id="categoria" name="categoria" required>
                <option value="">- Selecione -</option>
                <?php do { ?>
                <option value="<?php echo $linhacategoria['valor']?>"<?php if($linhacategoria['valor']===$linhaproduto['categoria'])echo "selected"?>><?php echo $linhacategoria['label']?></option>
                <?php } while
                ($linhacategoria=mysqli_fetch_assoc($resultadocategoria))?>
              </select>
            </div>

            <div>
              <label for="nome_produto" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome_produto" name="nome_produto" placeholder="Nome do produto" value="<?php echo $linhaproduto['nome_produto']?>" required>
            </div>

            <div>
              <label for="descricao_produto" class="form-label">Descrição</label>
              <textarea class="form-control" id="descricao_produto" name="descricao_produto" rows="2" required><?php echo $linhaproduto['descricao_produto']?></textarea>
            </div>

            <div>
              <label for="detalhes_produto" class="form-label">Detalhes</label>
              <textarea class="form-control" id="detalhes_produto" name="detalhes_produto" rows="3" required><?php echo $linhaproduto['detalhes_produto']?></textarea>
            </div>

            <div>
              <label for="imagem_produto" class="form-label">Imagem</label>
              <?php echo $linhaproduto['imagem_produto']?>
              <select class="form-select" name="imagem_produto" id="imagem_produto">
                <option value="">- Selecione -</option><?php $pasta=opendir('../produtos/');
                while(($arquivo=readdir($pasta))!==false){
                  if($arquivo!='.'&&$arquivo!='..'&&$arquivo!='Thumbs.db'){?>
                <option value="<?php echo $arquivo?>"<?php if($linhaproduto['imagem_produto']===$arquivo) echo "selected";?>><?php echo $arquivo?></option>
                <?php 
                    }
                  }
                  closedir($pasta);
                ?>
              </select>
            </div>

           <div>
           <label for="destaque" class="form-label">Destaque</label>
            <div class="form-check">
              <input id="dsim" name="destaque" value="sim" type="radio" class="form-check-input" <?php if($linhaproduto['destaque']==='sim') echo "checked"?>required>
              <label class="form-check-label" for="dsim">sim</label>
            </div>
            <div class="form-check">
              <input id="dnao" name="destaque" value="nao" type="radio" class="form-check-input" <?php if($linhaproduto['destaque']==='nao') echo "checked"?> required>
              <label class="form-check-label" for="dnao">não</label>
            </div>
          </div>

          <hr>
          <input type="hidden" name="alterar" value="altera_produto">
          <input type="hidden" name="id_produto" value="<?php echo $linhaproduto['id_produto']?>">
          <button type="submit">Alterar Produto</button>
        </form>
      </div>
    </main>
  </div>
</div>

</body>
</html>