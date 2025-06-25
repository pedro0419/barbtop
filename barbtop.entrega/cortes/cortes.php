<?php
     require_once '../conexao.php';
     include '../protecao.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/cortes.css">
    <title>cortes.barbtop</title>
</head>
<body>
     <header id="cabecalho">
          <img src="../assets/img/logo.png" alt="logo" id ="logo">
          <h1 id="titulo">Meus cortes</h1>
          <img src="../assets/img/menu.png" alt="menu" id = "butaoJS">
          <nav id ="sidemenu">
               <ul>
                    <li class = "itensLista"><a href="">Meus clientes</a></li>
                    <li class = "itensLista"><a href="cortes.php">Meus cortes</a></li>
                    <li class = "itensLista"><a href="">Meu lucro</a></li>
                    <li class = "itensLista"><a href="../barbeiros/barbeiros.php">Meus barbeiros</a></li>
                    <li class = "itensLista"><a href="../home.php">pagina inicial</a></li>
                    <li class = "itensLista">
                         <form action="logout.php" method = "post">
                             <input type="submit" value = "sair" id = "logaut">
                         </form>
                    </li>
               </ul>
          </nav>
     </header>
     <main>
          <?php 
               if (isset($_SESSION['concluidoOK'])) {
                    echo $_SESSION['concluidoOK'];
               }
               unset($_SESSION['concluidoOK']);

               if (isset($_SESSION['excluidoOK'])) {
                    echo $_SESSION['excluidoOK'];
               }
               unset($_SESSION['excluidoOK']);

               if (isset($_SESSION['erroOK'])) {
                    echo $_SESSION['erroOK'];
               }
               unset($_SESSION['erroOK']);

               if (isset($_SESSION['atualizadoOK'])) {
                    echo $_SESSION['atualizadoOK'];
               }

               if (isset($_SESSION['erroOK'])) {
                    echo $_SESSION['erroOK'];
               }
               if (isset($_SESSION['campoOK'])) {
                    echo $_SESSION['campoOK'];
               }
               unset($_SESSION['atualizadoOK']);
          ?>
          <table  border="1" width="100%" id ="tabela-barbeiros">
               <thead class="linha-cabecalho">
                    <th>nome</th>
                    <th>descrição</th>
                    <th>preço</th>
                    <th>ações</th>
               </thead>
               <tbody>
                    <?php 
                      
                    $stmt = $conexao->prepare("SELECT * FROM cortes ;");
                    $stmt->execute();
                    while ($cortes = $stmt->fetch(PDO::FETCH_OBJ)) { ?>

                    <tr>
                         <td>
                              <?php echo $cortes->nome; ?>
                         </td>
                         <td>
                              <?php echo $cortes->descricao; ?>
                         </td>
                              <td><?php echo $cortes->preco; ?>
                         </td>
                         <td id ="botao_crud">
                              <div class = "acoes">
                                   <form action="deleteCortes.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $cortes->id ?>">
                                        <input type="submit" value="excluir" id = "excluir">
                                   </form>
                              </div>
                              <div class = "acoes">
                                   <form action="updateCortesForm.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $cortes->id ?>">
                                        <input type="hidden" name="nome" value="<?php echo $cortes->nome ?>">
                                        <input type="hidden" name="descricao" value="<?php echo $cortes->descricao ?>">
                                        <input type="hidden" name="preco" value="<?php echo $cortes->preco ?>">
                                        <input type="submit" value="atualizar" id = "atualizar">
                                   </form>
                              </div>
                         </td>
                    </tr>
                    <?php } ?>
               </tbody>
          </table>
          <a href="createCortesForm.php"><button id="botao-cadastrar">cadastrar cortes</button></a>
    </main>
    <script src ="../sidebar.js"></script>
</body>
</html>