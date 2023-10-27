<?php 
    require_once('../conexao/conecta.php');
    $sql="SELECT id_produto, preco, categoria, nome_produto, descricao_produto, detalhes_produto, imagem_produto, destaque FROM produtos ORDER BY id_produto DESC";
    $result = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Produtos</title>
</head>
<body>

<div class="container-fluid">
  <div class="row">

    <main>
      <div class="box">
        <h1>Administração</h1>
        <a href="upload.php">Upload de imagens</a>
      </div>

    <h2>Produtos</h2>
      <div>
        <table>
          <thead>
            <tr>
              <th scope="col" style="width:4%">#</th>
              <th scope="col">Preço</th>
              <th scope="col">Categoria</th>
              <th scope="col">Nome Produto</th>
              <th scope="col">Descrição Produto</th>
              <th scope="col">Detalhes Produto</th>
              <th scope="col">Imagem Produto</th>
              <th scope="col">Destaque</th>
              <th colspan="2" scope="col" class="text-center"><a href="produto_insere.php">Inserir</a></th>
            </tr>
          </thead>

          <tbody>
          <?php do {?>
            <tr>
              <td><?php echo $linha['id_produto']?></td>
              <td><?php echo $linha['preco']?></td>
              <td><?php echo $linha['categoria']?></td>
              <td><?php echo $linha['nome_produto']?></td>
              <td><?php echo $linha['descricao_produto']?></td>
              <td><?php echo $linha['detalhes_produto']?></td>
              <td><?php echo $linha['imagem_produto']?></td>
              <td><?php echo $linha['destaque']?></td>
              <td class="text-center"><a href="produto_altera.php?id_produto=<?php echo $linha['id_produto']?>">Alterar</a></td>
              <td class="text-center"><a href="produto_exclui.php?id_produto=<?php echo $linha['id_produto']?>">Excluir</a></td>
            </tr>
          <?php } while($linha=mysqli_fetch_assoc($result))?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>
</body>
</html>