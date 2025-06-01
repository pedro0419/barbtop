<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login.barbtop</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <form action="verify.php" method="post" id = "container">
        <h1 id = "nome-cadastro">Login</h1>
        <div class = "box">
             <div>
                <label for="email" class = "labels">E-mail :</label>
            </div>
            <div>
                <input type="email" name="email" class ="inputs" >
            </div>
        </div>
        <div class = "box">
            <div>
                <label for="senha" class = "labels">Senha :</label>
            </div>
            <div>
                <input type="password" name="senha" class ="inputs" >
            </div>
        </div>
        <?php 
                    session_start();
                    if (isset($_SESSION['erro'])) {
                        echo $_SESSION['erro'];
    
                    }
                    session_unset();
                ?>
        <div>
            <input type="submit" id="enviar" value="Logar">
        </div>
        <div>
            <p>não tem login?<a href="cadastro.php" class = "link_cadastro"><strong>faço seu cadastro aqui.</strong></a></p>
        </div>
    </form>
</body>
</html>