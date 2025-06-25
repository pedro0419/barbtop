<?php
    include "protecao.php";
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
    <header id = "cabecalho">
        <img src="assets/img/logo.png" alt="logo" id ="logo">
        <h1 id = "barbtop">BARBTOP</h1>
        <img src="assets/img/menu.png" alt="menu" id = "butaoJS">
        <nav id ="sidemenu">
            <ul>
                <li class = "itensLista"><a href="">Meus clientes</a></li>
                <li class = "itensLista"><a href="cortes/cortes.php">Meus cortes</a></li>
                <li class = "itensLista"><a href="">Meu lucro</a></li>
                <li class = "itensLista"><a href="barbeiros/barbeiros.php">Meus barbeiros</a></li>
                <li class = "itensLista"><a href="home.php">pagina inicial</a></li>
                <li class = "itensLista">
                    <form action="logout.php" method = "post">
                        <input type="submit" value = "sair" id = "logaut">
                    </form>
                </li>
            </ul>
        </nav>
    </header>
    <main>
        
    </main>
    
    <script src = "sidebar.js"></script>
</body>
</html>