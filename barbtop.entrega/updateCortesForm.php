<?php
    require_once "conexao.php";
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $id = $_POST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="updateCortes.css">
</head>
<body>
    <form action="updateCortes.php" method = "post" id = "container">
        <div>
            <label for="nome" >Nome:</label>
        </div>
        <div>
            <input type="text" name = "nome" value ="<?php echo $nome?>"  class="inputs">
        </div>
        <div>
            <label for="descricao">Descrição</label>
        </div>
        <div>
            <input type="text" name = "descricao" value ="<?php echo $descricao ?>"  class="inputs">
        </div>
        <div>
            <label for="preco">Preço:</label>
        </div>
        <div>
            <input type="text" name = "preco" value ="<?php echo $preco ?>"  class="inputs">
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
