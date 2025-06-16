<?php
        include("protecao.php")
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
    <div id = "menu">
        <ul class = "lista">
            <li class ="intens-menu"><img src="logo.png" alt="" id = "logo"></li>
        </ul>
        <ul class = "lista">
            <li class ="intens-menu">
                <input type="text" id = "pesquisa">
            </li>
            <li>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/></svg>   
                </p>
            </li>
        </ul>
        <ul class = "lista">
            <li class ="intens-menu">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#1f1f1f"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg>
                </p>
            </li>
        </ul>
    </div>
    

    <form action="logout.php" method = "post">
        <input type="submit" value = "sair">
    </form>
</body>
</html>