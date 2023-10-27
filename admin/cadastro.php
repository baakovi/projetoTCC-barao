<?php

include("../conexao/conecta.php");

include("includes/functions.inc.php");

if (isset($_POST['submit'])) {

    $nome = $_POST["nome"];

    $email = $_POST["email"];

    $senha = $_POST["senha"];

    // echo var_dump($senha);

    $senhaRepetida = $_POST["senhaRepetida"];

    // echo var_dump($senhaRepetida);

    // require_once '../conexao/conecta.php';

    // require_once 'includes/functions.inc.php';

    // if (invalidEmail($email) !== false) {
    //     header("Location: ../cadastro.php?error=invalidemail");
    //     exit();
    // }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: cadastro.php?error=emailinvalido");
        exit();
    }

    else if(email_exists($email, $conexao)) {
        header("Location: cadastro.php?error=emailexiste");
        exit();
    }

    else if($senha != $senhaRepetida) {
        header("Location: cadastro.php?error=senhasnaocombinam");
        exit();
    }

    else {
        $sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
            header("Location: login.php");
            exit();
        }

        else {
            header("Location: cadastro.php?error=failed");
            echo "Cadastro não concluído";
        }
    }

    // print_r('Nome: ' . $_POST['nome']);
    // print_r('<br>');
    // print_r('Email: ' . $_POST['email']);
    // print_r('<br>');
    // print_r('Senha: ' . $_POST['senha']);
    // include_once('../conexao/conecta.php');
    // $nome = $_POST['nome'];
    // $email = $_POST['email'];
    // $senha = $_POST['senha'];
    // $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha) VALUES ('$nome', '$email', '$senha')");
    // header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">

    <title>Cadastro</title>

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
            background-image: linear-gradient(45deg, #1446A0, #0B161E);
        }

        div {
            background-color: rgba(0, 0, 0, 0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            width: 400px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 3px;
        }

        #button-input {
            background-color: #1446A0;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
        }

        a {
            list-style: none;
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>

    <div>
        <form action="cadastro.php" method="POST">
            <a href="index.php"><i class="fa-solid fa-chevron-left" style="color: #ffffff; font-size: 13px; padding-right: 5px"></i> Voltar</a>
            <h1>Cadastro</h1>
            <input type="text" name="nome" placeholder="Insira seu nome" required>
            <br><br>
            <input type="text" name="email" placeholder="Insira seu e-mail" required>
            <br><br>
            <input type="password" name="senha" placeholder="Digite sua senha" required>
            <br><br>
            <input type="password" name="senhaRepetida" placeholder="Digite a senha novamente" required>
            <br><br>
            <button type="submit" name="submit" id="button-input">Cadastre-se</button>
        </form>
    </div>

</body>

</html>