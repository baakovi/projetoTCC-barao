<?php

    if (isset($_POST["submit"])) {
        
        $email = $_POST["email"];
        $senha = $_POST["senha"];

        require_once '../../conexao/conecta.php';
        require_once 'functions.inc.php';

        // loginUser($conexao, $email, $senha);
    }
    else {
        header("Location: ../login.php");
    }

?>