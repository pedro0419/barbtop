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
            echo"preencha";
            header("location: login.php");
            exit();
        }
    } else {
        echo "Preencha os campos";
        header("location: login.php");
        exit();
    }


?> 