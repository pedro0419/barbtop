<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once '../conexao.php';

        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        $preco = $_POST['preco'];
        $id = $_POST['id'];
        
        if(!empty($nome) && !empty($descricao) && !empty($preco) && !empty($id)){
            $stmt = $conexao->prepare("UPDATE cortes SET nome = :nome, descricao = :descricao, preco = :preco WHERE id = :id");

            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':descricao', $descricao);
            $stmt->bindValue(':preco', $preco);
            $stmt->bindValue(':id', $id);
            if($stmt->execute()) {
                $_SESSION['atualizadoOK'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>Atualização completa</p>";
                header("location: cortes.php");
                exit();
            }else {
                $_SESSION['erroOK'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>erro</p>";
                header("location: cortes.php");
                exit();
            }
        }else {
            $_SESSION['campoOK'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>preencha os campos</p>";
            header("location: cortes.php");
            exit();
        }
       
    ?>

</body>
</html>