<?php 

    // print_r($_REQUEST)
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('../../conexao/conecta.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql);

        // print_r($sql);
        // print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            // print_r('Não existe');
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: ../login.php');
        }
        else
        {
            // print_r(('Existe'));
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: ../account.php');
        }
    }
    else
    {
        // Não acessa
        header('Location: ../login.php');
    }

?>