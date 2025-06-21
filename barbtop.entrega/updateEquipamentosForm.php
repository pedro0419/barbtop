<?php
    require_once "conexao.php";
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];
    $ = $_POST[''];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="updateBarbeiros.php" method = "post">
        <div>
            <label for=""></label>
        </div>
        <div>
            <input type="text" name = "" value ="<?php echo $?>">
        </div>
        <div>
            <label for=""></label>
        </div>
        <div>
            <input type="text" name = "" value ="<?php echo $?>">
        </div>
        <div>
            <label for=""></label>
        </div>
        <div>
            <input type="text" name = "" value ="<?php echo $?>">
        </div>
        <div>
            <label for=""></label>
        </div>
        <div>
            <input type="text" name = "" value ="<?php echo $?>">
        </div>
        <div>
            <label for=""></label>
        </div>
        <div>
            <input type="text" name = "" value ="<?php echo $?>">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        
        <div>
            <input type="submit" value = "Atualizar">
        </div>
    </form>
    
    
    
    
</body>
</html>
