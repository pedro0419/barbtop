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
        $ = $_POST[''];
        $ = $_POST[''];
        $ = $_POST[''];
        $ = $_POST[''];
        $ = $_POST[''];
        $ = $_POST[''];
        
        if(!empty($) && !empty($) && !empty($) && !empty($) && !empty($)){
            $stmt = $conexao->prepare("UPDATE  SET  = :,  = :,  = :,  = :,  = : WHERE  = :");

            $stmt->bindValue(':', $);
            $stmt->bindValue(':', $);
            $stmt->bindValue(':', $);
            $stmt->bindValue(':', $);
            $stmt->bindValue(':', $);
            $stmt->bindValue(':', $);
            if($stmt->execute()) {
                $_SESSION['atualizado'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>Atualização completa</p>";
                header("location: .php");
                exit();
            }else {
                $_SESSION['erro'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>erro</p>";
                header("location: .php");
                exit();
            }
        }else {
            $_SESSION['campoV'] = "<p style='color:rgb(0, 0, 0); font-weight:600; text-align: center;'>preencha os campos</p>";
            header("location: .php");
            exit();
        }
       
    ?>

</body>
</html>