<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
<div class="container-fluid">
  <div class="row">

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Administração</h1>
      </div>

    <h2>Upload</h2>
    <div class="col-md-12 col-lg-8">
        <h4 class="mb-3">Envio de imagens</h4>
        <form class="needs-validation" method="POST" action="" enctype="multipart/form-data" novalidate>
          <div class="row g-3"> 
            <div class="col-sm-12">
              <label for="imagem" class="form-label">Arquivo</label>
              <input type="file" class="form-control" id="imagem" name="imagem" required>
              <div class="invalid-feedback">
                Selecione a imagem.
              </div>
            </div>

            <div class="col-sm-12">
                <?php
                if (isset($_POST['inserir']) && $_POST['inserir'] === 'insere_imagem') {
                  echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">';
                  echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
                  
                  $pasta = "../Produtos/";
                  $nome = basename($_FILES['imagem']['name']);
                  $temporario = $_FILES['imagem']['tmp_name'];
                  $arquivo = $pasta.$nome;
                  $uploadok = 1;
                  
                  $imagemtipo = strtolower(pathinfo($arquivo,PATHINFO_EXTENSION));
                  $check = getimagesize($temporario);
                  if($check !== false){
                    echo "O arquivo é uma imagem da extensão: " . $check['mime'] . '<br>';
                    $uploadok = 1;
                  }
                  else{
                    echo "Envie apenas arquivos de imagem. Ex: jpg, png, gif...<br>";
                    $uploadok = 0;
                  }
                  
                  if (file_exists($arquivo)) {
                    echo "Já existe uma imagem com este nome.<br>";
                    $uploadok = 0;
                  }
                  
                  if ($_FILES['imagem']['size'] > 500000) {
                    echo "Envie apenas arquivos de no máximo 500Kb.<br>";
                    $uploadok = 0;
                  }
                  #limitando as extensões de arquivo
                  if ($imagemtipo != 'jpg' && $imagemtipo != 'jpeg' && $imagemtipo != 'png' && $imagemtipo != 'gif') {
                    echo "Envie somente as extensões jpg, jpeg, png e gif.<br>";
                    $uploadok = 0;
                  }
                  if ($uploadok === 0) {
                    echo "O arquivo " . $nome . " não pode ser enviado.<br>";
                  } else{
                    if (move_uploaded_file($temporario,$arquivo)) {
                      echo "O arquivo " . $nome . " foi enviado com sucesso!<br>";
                    }
                    else{
                      echo "Tente novamente.<br>";
                    }
                  }
                echo '</div>';
                }
                ?>
            </div>

          <hr class="my-4">
          <input type="hidden" name="inserir" value="insere_imagem">
          <button class="w-100 btn btn-primary btn-lg mb-5" type="submit">Inserir Imagem</button>
        </div>
        </form>
      </div>
    </main>
  </div>
</div>

</body>
</html>