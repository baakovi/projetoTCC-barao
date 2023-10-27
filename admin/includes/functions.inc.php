<?php

    // Função para ver se o email está invalido
    // function invalidEmail($email) {
    //     $result;
    //     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         $result = true;
    //     }
    //     else {
    //         $result = false;
    //     }
    //     return $result;
    // }

    function email_exists($email, $conexao) {
        $result = mysqli_query($conexao, "SELECT id_usuario FROM usuarios WHERE email = '$email'");

        if(mysqli_num_rows($result) == 1) {
            return true;
        }
        else {
            return false;
        }
    }

    // function createUser($conexao, $nome, $email, $senha) {
    //     $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha');";
    //     $stmt = mysqli_stmt_init($conexao);
    //     if (!mysqli_stmt_prepare($stmt, $sql)) {
    //         header("Location: ../cadastro.php?error=stmtfailed");
    //         exit();
    //     }

    //     $hashedPwd = password_hash($senha, PASSWORD_DEFAULT);

    //     mysqli_stmt_bind_param($stmt, "sss", $nome, $email, $hashedPwd);
    //     mysqli_stmt_execute($stmt);
    //     mysqli_stmt_close($stmt);
    //     header("Location: ../cadastro.php?error=none");
    //     exit();
    // }

?>