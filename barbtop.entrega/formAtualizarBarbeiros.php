<?php
    require_once "conexao.php";
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $endereco = $_POST["endereco"];
    $telefone = $_POST["telefone"];
    $CPF = $_POST["CPF"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="atualizarBarbeiros.php" method = "post">
        <div>
            <label for="nome">Nome:</label>
        </div>
        <div>
            <input type="text" name = "nome" value ="<?php echo $nome?>">
        </div>
        <div>
            <label for="idade">Idade:</label>
        </div>
        <div>
            <input type="text" name = "idade" value ="<?php echo $idade?>">
        </div>
        <div>
            <label for="enereco">Endereço:</label>
        </div>
        <div>
            <input type="text" name = "endereco" value ="<?php echo $endereco?>">
        </div>
        <div>
            <label for="telefone">Telefone:</label>
        </div>
        <div>
            <input type="text" name = "telefone" value ="<?php echo $telefone?>">
        </div>
        <div>
            <label for="CPF">CPF:</label>
        </div>
        <div>
            <input type="text" name = "CPF" value ="<?php echo $CPF?>">
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