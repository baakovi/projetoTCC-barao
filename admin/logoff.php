<?php

    if(!isset($_SESSION)) {
        session_start();
    }

    unset(
        $_SESSION['nome'],
        $_SESSION['email'],
        $_SESSION['senha']
    );

    $_SESSION['logOff'] = "LogOff realizado com sucesso!";
    header('Location: index.php');
