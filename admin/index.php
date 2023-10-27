<?php

if (!isset($_SESSION)) {
    session_start();
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">

    <title>Cadastro | Login</title>

    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Quicksand&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-family: 'Fira Sans', sans-serif;
            background-image: linear-gradient(45deg, #1446A0, #0B161E);
            text-align: center;
            color: white;
        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 350px;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
        }

        .btn {
            background-color: #1446A0;
            border: none;
            padding: 13px;
            width: 50%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .button-a {
            text-decoration: none;
            color: white;
        }

        .cadastro-a {
            color: white;
        }

        .a-home {
            color: white;
            text-decoration: none;
        }

        .btn-logoff {
            width: 200px;
            font-size: 16px;
            font-weight: 600;
            color: #fff;
            cursor: pointer;
            margin: 20px;
            height: 55px;
            text-align: center;
            border: none;
            background-size: 300% 100%;
            border-radius: 50px;
            -moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-logoff:hover {
            background-position: 100% 0;
            -moz-transition: all .4s ease-in-out;
            -o-transition: all .4s ease-in-out;
            -webkit-transition: all .4s ease-in-out;
            transition: all .4s ease-in-out;
        }

        .btn-logoff:focus {
            outline: none;
        }

        .btn-logoff.btn-hover {
            background-image: linear-gradient(to right,
                    #25aae1,
                    #4481eb,
                    #04befe,
                    #3f86ed);
            box-shadow: 0 4px 15px 0 rgba(65, 132, 234, 0.75);
        }
    </style>
</head>

<body>

    <div class="box">
        <br>
        <a href="../index.php" class="a-home"><i class="fa-solid fa-house"></i></a>
        <h1>Entre ou cadastre-se</h1>
        <h3>Já possui uma conta?</h3>
        <p>Inicie uma sessão</p>
        <button class="btn"><a href="login.php" class="button-a">Faça login</a></button>
        <hr>
        <br>
        <p>Ainda não possui uma conta?</p>
        <p style="font-size: 18px;"><a href="cadastro.php" class="cadastro-a">Cadastre-se</a></p>

        <?php
        if (isset($_SESSION['logOff'])) {
            echo '<div>';
            echo '<button class="btn-logoff btn-hover">';
            echo $_SESSION['logOff'];
            echo '</button>';
            echo '</div>';
            unset($_SESSION['logOff']);
        }
        ?>
    </div>

</body>

</html>