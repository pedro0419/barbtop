<?php 
    require_once 'conexao.php';
    session_start();
    $nome = trim($_POST['nome']);
    $descricao = trim($_POST['descricao']) ;
    $preco = trim($_POST['preco']);
    if (!empty($nome) && !empty($descricao) && !empty($preco)) {
        $stmt = $conexao-> prepare("INSERT INTO cortes (nome, descricao, preco) VALUES (:nome, :descricao, :preco)");
        $stmt-> bindValue(':nome',$nome); 
        $stmt-> bindValue(':descricao',$descricao); 
        $stmt-> bindValue(':preco',$preco);
        if ($stmt->execute()) {
           $_SESSION['concluidoOK'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>dados cadastrados</p>";
           header("location: cortes.php");
           exit();
        }
    }
    else {
        $_SESSION['erroOK'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>Preencha os campos</p>";
        header("location: createCortesForm.php");
        exit();
    }
    
?>