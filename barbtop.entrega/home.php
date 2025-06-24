<?php
    session_start();
    include "protecao.php";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <header id = "cabecalho">
        <img src="menu.png" alt="menu">
        <nav id ="sidemenu">
            <ul>
                <li><a href="">Meus clientes</a></li>
                <li><a href="cortes.php">Meus cortes</a></li>
                <li><a href="">Meu lucro</a></li>
                <li><a href="barbeiros.php">Meus barbeiros</a></li>
            </ul>
        </nav>
    </header>
    
    
    <form action="logout.php" method = "post">
        <input type="submit" value = "sair">
    </form>
</body>
</html>