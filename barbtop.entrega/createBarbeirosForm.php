<?php
     session_start();
    include "protecao.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastrarNovoBarbeiro.barbtop</title>
    <link rel="stylesheet" href="createBarbeiros.css">
</head>
<body>
    <div >
        <form action="createBarbeiros.php" method="post"  id="container">
          <h1 id = "nome-cadastro">Cadastro</h1>
          <?php
          if (isset($_SESSION['erro'])) {
                    echo $_SESSION['erro'];
               }
          ?>
          <div>
               <div>
                   <label for="nome" class="labels" class="label">Nome:</label>
               </div>
               <div>
                    <input type="text" name="nome" class="inputs">
               </div>
          </div>
          <div>
               <div>
                    <label for="idade"  class="labels" >Idade:</label>
               </div>
               <div>
                     <input type="int" name="idade" class="inputs">
               </div>
          </div>
          <div>
               <div>
                    <label for="endereco"  class="labels" >Endereço:</label>
               </div>
               <div>
                    <input type="text" name="endereco" class="inputs">
               </div>
          </div>
          <div>
               <div>
                    <label for="email"  class="labels">Telefone:</label>
               </div>
               <div>
                    <input type="number" name="telefone" class="inputs">
               </div>
          </div>
          <div>
               <div>
                    <label for="CPF"  class="labels">CPF:</label>
               </div>
               <div>
                    <input type="number" name="CPF" class="inputs">
               </div>
          </div>
          <div>
               <input type="submit" id="enviar" value="Cadastrar">
          </div>
        </form>
</body>
</html>