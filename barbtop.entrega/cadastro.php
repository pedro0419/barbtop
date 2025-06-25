<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro.barbtop</title>
    <link rel="stylesheet" href="../barbtop.entrega/assets/css/cadastro.css">
</head>
<body>
    <div >
        <form action="create.php" method="post"  id="container">
          <h1 id = "nome-cadastro">Cadastro</h1>
          <div class = "box">
               <div>
                   <label for="nome" class="labels" class="label">Nome:</label>
               </div>
               <div>
                    <input type="text" name="nome" class="inputs">
               </div>
          </div>
          <div class = "box">
               <div>
                    <label for="numeroCelular"  class="labels" >Numero celular:</label>
               </div>
               <div>
                     <input type="tel" name="numeroCelular" class="inputs">
               </div>
          </div>
          <div class = "box">
               <div>
                    <label for="endereco"  class="labels" >Endereço:</label>
               </div>
               <div>
                    <input type="text" name="endereco" class="inputs">
               </div>
          </div>
          <div class = "box">
               <div>
                    <label for="email"  class="labels">Email:</label>
               </div>
               <div>
                    <input type="email" name="email" class="inputs">
               </div>
          </div>
          <div class = "box">
               <div>
                    <label for="senha"  class="labels">Senha:</label>
               </div>
               <div>
                    <input type="password" name="senha" class="inputs">
               </div>
          </div>
          <?php 
               session_start();
               if (isset($_SESSION['concluido'])) {
                    echo $_SESSION['concluido'];
               }

               if (isset($_SESSION['erro'])) {
                    echo $_SESSION['erro'];
               }
               session_unset();
          ?>
          <div>
               <input type="submit" id="enviar" value="Cadastrar">
          </div>
               <p>Já tem um cadastro?<a href="login.php" class = "link_login"><strong>faça login aqui.</strong></a></p>
          </div> 
        </form>
    </div>
    
        
</body>
</html>