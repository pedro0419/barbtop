<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>equipamentos.barbtop</title>
</head>
<body>
    <?php 
               session_start();
               if (isset($_SESSION[''])) {
                    echo $_SESSION[''];
               }

               if (isset($_SESSION[''])) {
                    echo $_SESSION[''];
               }
               unset($_SESSION['']);
          ?>
    </div>
    <table border="1" width="100%">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
          <tbody>
            <?php   
               if (isset($_SESSION[''])) {
                    echo $_SESSION[''];
               }

               if (isset($_SESSION[''])) {
                    echo $_SESSION[''];
               }
               unset($_SESSION['']);

            require_once "conexao.php";

            $stmt = $conexao->prepare("SELECT * FROM equipamentos ;");
            $stmt->execute();

            while ($equipamentos = $stmt->fetch(PDO::FETCH_OBJ)) { ?>
                <tr>
                    <td><?php echo $equipamentos->; ?></td>
                    <td><?php echo $equipamentos->; ?></td>
                    <td><?php echo $equipamentos->; ?></td>
                    <td><?php echo $equipamentos->; ?></td>
                    <td><?php echo $equipamentos->; ?></td>
                    <td>
                         <form action="deleteBarbeiros.php" method="post">
                              <input type="hidden" name="id" value="<?php echo $equipamentos->id ?>">
                              <input type="submit" value="excluir">
                         </form>
                    </td>
                    <td><form action="updateEquipamentosForm.php" method="post">
                         <input type="hidden" name="" value="<?php echo $equipamentos-> ?>">
                         <input type="hidden" name="" value="<?php echo $equipamentos-> ?>">
                         <input type="hidden" name="" value="<?php echo $equipamentos-> ?>">
                         <input type="hidden" name="" value="<?php echo $equipamentos-> ?>">
                         <input type="hidden" name="" value="<?php echo $equipamentos-> ?>">
                         <input type="hidden" name="" value="<?php echo $equipamentos-> ?>">
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

    <a href="createBarbeirosForm.php"><button>cadastrar equipamentos</button></a>
</body>
</html>