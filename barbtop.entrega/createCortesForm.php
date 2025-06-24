<?php
     session_start();
    include "protecao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formCorte.css">
</head>
<body>
    <div >
        <form action="createCortes.php" method="post"  id="container">
          <h1 id = "nome-cadastro">Cadastro de Cortes</h1>
          <?php
          if (isset($_SESSION['erroOK'])) {
                    echo $_SESSION['erroOK'];
               }
          ?>
          <div>
               <div>
                   <label for="nome" class="labels">Nome:</label>
               </div>
               <div>
                    <input type="text" name="nome" class="inputs">
               </div>
          </div>
          <div>
               <div>
                    <label for="descricao"  class="labels" >descrição:</label>
               </div>
               <div>
                     <input type="text" name="descricao" class="inputs">
               </div>
          </div>
          <div>
               <div>
                   <label for="preco" class="labels">Preço:</label>
               </div>
               <div>
                    <input type="text" name="preco" class="inputs">
               </div>
          </div>
          <div id = "enviardiv">
               <input type="submit" id="enviar" value="Cadastrar" >
          </div>
        </form>
</body>
</html>