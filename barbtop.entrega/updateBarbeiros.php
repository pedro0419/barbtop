
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "conexao.php";
        session_start();
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $CPF = $_POST['CPF'];
        $id = $_POST['id'];
        
        if(!empty($nome) && !empty($idade) && !empty($endereco) && !empty($telefone) && !empty($CPF)){
            $stmt = $conexao->prepare("UPDATE barbeiros SET nome = :nome, idade = :idade, endereco = :endereco, telefone = :telefone, CPF = :CPF WHERE id = :id");

            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':idade', $idade);
            $stmt->bindValue(':endereco', $endereco);
            $stmt->bindValue(':telefone', $telefone);
            $stmt->bindValue(':CPF', $CPF);
            $stmt->bindValue(':id', $id);
            if($stmt->execute()) {
                $_SESSION['atualizado'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>Atualização completa</p>";
                header("location: barbeiros.php");
                exit();
            }else {
                $_SESSION['erro'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>erro</p>";
                header("location: barbeiros.php");
                exit();
            }
        }else {
            $_SESSION['campoV'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>preencha os campos</p>";
            header("location: barbeiros.php");
            exit();
        }
       
    ?>

</body>
</html>