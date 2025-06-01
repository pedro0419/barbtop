<?php 
    require_once 'conexao.php';
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
           echo "Dados Cadastrados";
        }
        else {
            echo "Erro ao cadastrar os dados";
        }
    } else {
        echo "Preencha os campos";
    }