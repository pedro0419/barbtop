<?php 
    require_once 'conexao.php';
    session_start();
    $nome = trim($_POST['nome']);
    $idade = trim($_POST['idade']) ;
    $endereco = trim($_POST['endereco']);
    $telefone = trim($_POST['telefone']); 
    $CPF = trim($_POST['CPF']);

    if (!empty($nome) && !empty($idade) && !empty($endereco) && !empty($telefone) && !empty($CPF)) {
        $stmt = $conexao-> prepare("INSERT INTO barbeiros (nome, idade, endereco, telefone, CPF, id) VALUES (:nome, :idade, :endereco, :telefone, :CPF, :id)");
        $stmt-> bindValue(':nome',$nome); 
        $stmt-> bindValue(':idade',$idade); 
        $stmt-> bindValue(':endereco',$endereco);
        $stmt-> bindValue(':telefone',$telefone);
        $stmt-> bindValue(':CPF',$CPF);
        $stmt-> bindValue(':id',$id);
        if ($stmt->execute()) {
           $_SESSION['concluido'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>dados cadastrados</p>";
           header("location: barbeiros.php");
           exit();
        }
    }
    else {
        $_SESSION['erro'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>Preencha os campos</p>";
        header("location: barbeiros.php");
        exit();
    }
    
?>