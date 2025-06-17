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

        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $endereco = $_POST["endereco"];
        $telefone = $_POST["telefone"];
        $CPF = $_POST["CPF"];        
    ?>

</body>
</html>