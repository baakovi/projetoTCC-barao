<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../Logo/icone.ico" type="image/x-icon">

    <title>Login</title>

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
            width: 300px;
            border: none;
            outline: none;
            font-size: 15px;
            border-radius: 3px;
        }

        .buttonSubmit {
            background-color: #1446A0;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .buttonSubmit:hover {
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
        <a href="index.php"><i class="fa-solid fa-chevron-left" style="color: #ffffff; font-size: 13px; padding-right: 5px"></i> Voltar</a>
        <h1>Login</h1>
        <form action="includes/loginsystem.php" method="POST">
            <input type="text" name="email" placeholder="Insira seu e-mail" required>
            <br><br>
            <input type="password" name="senha" placeholder="Insira sua senha" required>
            <br><br>
            <button type="submit" name="submit" class="buttonSubmit">Enviar</button>
        </form>
    </div>

</body>

</html>