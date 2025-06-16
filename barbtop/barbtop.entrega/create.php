<?php 
    require_once 'conexao.php';
    session_start();
    $nome = trim($_POST['nome']);
    $numeroCelular = trim($_POST['numeroCelular']) ;
    $endereco = trim($_POST['endereco']);
    $email = trim($_POST['email']); 
    $senha = trim(password_hash($_POST['senha'], PASSWORD_DEFAULT));
    if (!empty($email) && !empty($senha)) {
        $stmt = $conexao-> prepare("INSERT INTO usuarios (nome, numeroCelular, endereco, email, senha) VALUES (:nome, :numeroCelular, :endereco, :email, :senha)");
        $stmt-> bindValue(':nome',$nome); 
        $stmt-> bindValue(':numeroCelular',$numeroCelular); 
        $stmt-> bindValue(':endereco',$endereco);
        $stmt-> bindValue(':email',$email);
        $stmt-> bindValue(':senha',$senha);
        if ($stmt->execute()) {
           $_SESSION['concluido'] = "<p style='color:rgb(255, 255, 255); font-weight:600; text-align: center;'>dados cadastrados</p>";
           header("location: cadastro.php");
           exit();
        }
    }
    else {
        $_SESSION['erro'] = "<p style='color:rgb(255, 255, 255); font-weight:600; text-align: center;'>Preencha os campos</p>";
        header("location: cadastro.php");
        exit();
    }
    
?> 