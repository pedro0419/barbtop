<?php  
    include "protecao.php";
?>
<?php
    require_once "conexao.php";
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $CPF = $_POST['CPF'];
    $id = $_POST['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "updateBarbeiros.css">
</head>
<body>
    <form action="updateBarbeiros.php" method = "post"  id = "container">
        <div>
            <label for="nome" class="labels">Nome:</label>
        </div>
        <div>
            <input type="text" name = "nome" value ="<?php echo $nome?>"  class="inputs">
        </div>
        <div>
            <label for="idade" class="labels">Idade:</label>
        </div>
        <div>
            <input type="text" name = "idade" value ="<?php echo $idade?>"  class="inputs">
        </div>
        <div>
            <label for="enereco" class="labels">Endereço:</label>
        </div>
        <div>
            <input type="text" name = "endereco" value ="<?php echo $endereco?>"  class="inputs">
        </div>
        <div>
            <label for="telefone" class="labels">Telefone:</label>
        </div>
        <div>
            <input type="text" name = "telefone" value ="<?php echo $telefone?>"  class="inputs">
        </div>
        <div>
            <label for="CPF" class="labels">CPF:</label>
        </div>
        <div>
            <input type="text" name = "CPF" value ="<?php echo $CPF?>"  class="inputs">
        </div>
        <div>
            <input type="hidden" name="id" value="<?php echo $id ?>">
        </div>
        
        <div id="enviardiv">
            <input type="submit" value = "Atualizar" id="enviar">
        </div>
    </form>
    
    
    
    
</body>
</html>