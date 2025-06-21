<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barbeiros.barbtop</title>
</head>
<body>
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
               unset($_SESSION['erro']);

            require_once "conexao.php";

            $stmt = $conexao->prepare("SELECT * FROM barbeiros ;");
            $stmt->execute();

            while ($barbeiros = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                    <td><?php echo $barbeiros->nome; ?></td>
                    <td><?php echo $barbeiros->idade; ?></td>
                    <td><?php echo $barbeiros->endereco; ?></td>
                    <td><?php echo $barbeiros->telefone; ?></td>
                    <td><?php echo $barbeiros->CPF; ?></td>
                    <td>
                         <form action="deleteBarbeiros.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $barbeiros->id ?>">
                              <input type="submit" value="excluir">
                         </form>
                    </td>
                    <td><form action="updateBarbeirosForm.php" method="post">
                         <input type="hidden" name="nome" value="<?php echo $barbeiros->nome ?>">
                         <input type="hidden" name="idade" value="<?php echo $barbeiros->idade ?>">
                         <input type="hidden" name="endereco" value="<?php echo $barbeiros->endereco?>">
                         <input type="hidden" name="telefone" value="<?php echo $barbeiros->telefone?>">
                         <input type="hidden" name="CPF" value="<?php echo $barbeiros->CPF?>">
                         <input type="hidden" name="id" value="<?php echo $barbeiros->id?>">
                         <input type="submit" value="atualizar">
                         </form>
                    </td>
                </tr>
                <?php   
               if (isset($_SESSION['atualizado'])) {
                    echo $_SESSION['atualizado'];
               }

               if (isset($_SESSION['erro'])) {
                    echo $_SESSION['erro'];
               }

               if (isset($_SESSION['campoV'])) {
                    echo $_SESSION['campoV'];
               }
               session_unset();
               ?> 
            <?php } ?>
        </tbody>
    </table>

    <a href="createBarbeirosForm.php"><button>cadastrar barbeiros</button></a>
</body>
</html>