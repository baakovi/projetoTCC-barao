<?php

    require_once('../conexao/conecta.php');
    $sql="SELECT*FROM categorias";
    $resultado=mysqli_query($conexao, $sql);
    $linha=mysqli_fetch_assoc($resultado);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias</title>
</head>
<body>
    <!-- :) -->
    <div class="container-fluid">
        <div class="row">

    <main>
      <div>
        <h1>Administração</h1>
      </div>

    <h2>Categorias dos Produtos</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Abreviação</th>
              <th scope="col">Legenda</th>
              <th colspan="2" scope="col" class="text-center"><a href="categoria_insere.php">Inserir</a></th>
            </tr>
          </thead>
          <tbody>
            <?php do { ?>
            <tr>
              <td><?php echo $linha['id_categoria']?></td>
              <td><?php echo $linha['valor']?></td>
              <td><?php echo $linha['label']?></td>
              <td class="text-center"><a href="categoria_altera.php?id_categoria=<?php echo $linha['id_categoria']?>" class="text-decoration-none">Alterar</a></td>
              <td class="text-center"><a href="categoria_exclui.php?id_categoria=<?php echo $linha['id_categoria']?>" class="text-decoration-none">Excluir</a></td>
            </tr>
            <?php } while($linha=mysqli_fetch_assoc($resultado))?>
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>

</body>
</html>