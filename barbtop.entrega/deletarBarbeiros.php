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
        $idCPF = $_GET["ID"];

        $stmt = $conexao->prepare("DELETE FROM barbeiros WHERE CPF = :CPF");
        $stmt->bindValue(":CPF", $idCPF);

        if($stmt->execute()) {
            $_SESSION['excluido'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>dados excluidos</p>";
           header("location: barbeiros.php");
           exit();
        } else {
            $_SESSION['erro'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>erro</p>";
           header("location: barbeiros.php");
        }
    ?>
</body>
</html>