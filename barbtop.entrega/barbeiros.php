<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barbeiros.barbtop</title>
</head>
<body>
    <body>
    <div >
        <form action="cadastroBarbeiros.php" method="post"  id="container">
          <h1 id = "nome-cadastro">Cadastro</h1>
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
                    <input type="tel" name="telefone" class="inputs">
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
          <?php 
               session_start();
               if (isset($_SESSION['concluido'])) {
                    echo $_SESSION['concluido'];
               }

               if (isset($_SESSION['erro'])) {
                    echo $_SESSION['erro'];
               }
               unset($_SESSION['erro']);
          ?>
          <div>
               <input type="submit" id="enviar" value="Cadastrar">
          </div>
        </form>
    </div>
    <table border="1" width="100%">
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>CPF</th>
        </tr>
          <tbody>
            <?php   
               if (isset($_SESSION['excluido'])) {
                    echo $_SESSION['excluido'];
               }

               if (isset($_SESSION['erro'])) {
                    echo $_SESSION['erro'];
               }
               session_unset();

            require_once "conexao.php";

            $stmt = $conexao->prepare("SELECT * FROM barbeiros;");
            $stmt->execute();

            while ($rows = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                    <td><?php echo $rows->nome; ?></td>
                    <td><?php echo $rows->idade; ?></td>
                    <td><?php echo $rows->endereco; ?></td>
                    <td><?php echo $rows->telefone; ?></td>
                    <td><?php echo $rows->CPF; ?></td>
                    <td><a href="deletar.php?ID= <?php echo $rows->CPF; ?>">excluir</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>