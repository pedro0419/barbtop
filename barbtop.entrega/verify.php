<?php
    require_once 'conexao.php';
    session_start();

    $email = trim($_POST['email']);
    $senha = trim($_POST['senha']); 
    if (!empty($email) && !empty($senha) ) {
        $stmt = $conexao->prepare("SELECT * FROM usuarios WHERE email = :email" );
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        $usuariodb = $stmt->fetch();
   
       if  ($usuariodb && password_verify($senha,$usuariodb['senha'])) {
          $_SESSION['id'] = $usuariodb['id'];
          header("location: home.php");
          exit();
        }
        else {
            $_SESSION['erro'] = "<p style='color:rgb(255, 255, 255); font-weight:600; text-align: center;'>Usuário ou senha incorreto</p>";
            header("location: login.php");
            exit();
        }
    } else {
        $_SESSION['erro'] = "<p style='color:rgb(255, 255, 255); font-weight:600; text-align: center;'>Preencha os campos</p>";
        header("location: login.php");
        exit();
    }
?> 