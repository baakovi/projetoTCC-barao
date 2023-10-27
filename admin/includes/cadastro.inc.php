<?php

$error = "";

if (isset($_POST['submit'])) {

    $nome = $_POST["nome"];

    $email = $_POST["email"];

    $senha = $_POST["senha"];

    $senhaRepetida = $_POST["senhaRepetida"];

    require_once '../../conexao/conecta.php';

    require_once 'functions.inc.php';

    // if (invalidEmail($email) !== false) {
    //     header("Location: ../cadastro.php?error=invalidemail");
    //     exit();
    // }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../cadastro.php?error=emailinvalido");
        exit();
    }

    else if(email_exists($email, $conexao)) {
        header("Location: ../cadastro.php?error=emailexiste");
        exit();
    }

    else if($senha !== $senhaRepetida) {
        header("Location: ../cadastro.php?error=senhasnaocombinam");
        exit();
    }

    else {
        $sql = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome', '$email', '$senha')";
        if (mysqli_query($conexao, $sql)) {
            header("Location: ../cadastro.php?error=none");
            exit();
        }

        else {
            header("Location: ../cadastro.php?error=failed");
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

else {
    header("Location: ../cadastro.php");
}

?>