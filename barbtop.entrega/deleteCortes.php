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
        $id = $_POST['id'];

        $stmt = $conexao->prepare("DELETE FROM cortes WHERE id = :id");
        $stmt->bindValue(':id', $id);

        if($stmt->execute()) {
            $_SESSION['excluidoOK'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>dados excluidos</p>";
           header("location: cortes.php");
           exit();
        } else {
            $_SESSION['erroOK'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>erro</p>";
           header("location: cortes.php");
        }
    ?>
</body>
</html>