<?php
    require_once "conexao.php";
    $stmt = $conexao-> prepare("INSERT INTO barbeios (id) VALUES (:id)");
    $stmt-> bindValue(':id',$id);
    $stmt-> execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $CPF = $_POST["CPF"];
               
        if ($nome === '') {
            $stmt = $conexao->prepare("UPDATE barbeiros SET nome = :nome WHERE id = :id");

            $stmt->bindValue("nome", $nome);
        }elseif ($idade === '') {
            $stmt = $conexao->prepare("UPDATE barbeiros SET idade = :idade WHERE id = :id");

            $stmt->bindValue(":idade", $idade);
        }elseif ($endereco === '') {
            $stmt = $conexao->prepare("UPDATE barbeiros SET endereco = :endereco WHERE id = :id");

            $stmt->bindValue(":endereco", $endereco);
        }elseif ($telefone === '') {
            $stmt = $conexao->prepare("UPDATE barbeiros SET telefone = :telefone WHERE id = :id");

            $stmt->bindValue(":telefone", $telefone);
        }elseif ($CPF === '') {
            $stmt = $conexao->prepare("UPDATE barbeiros SET CPF = :CPF WHERE id = :id");

            $stmt->bindValue(":CPF", $CPF);
        }else {
            $stmt = $conexao->prepare("UPDATE barbeiros SET nome = :nome, idade = :idade, endereco = :endereco, telefone = :telefone, CPF = :CPF, id = :id WHERE id = :id");

            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":idade", $idade);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":CPF", $CPF);
            $stmt->bindValue(":id", $id);
            if($stmt->execute()) {
                echo "dados atualizados";
            }else {
                echo "erro na atualização";
            }
        }
       
    ?>
    ?>

</body>
</html>