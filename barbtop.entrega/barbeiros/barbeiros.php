<?php
     session_start();
     include '../protecao.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>barbeiros.barbtop</title>
    <link rel="stylesheet" href="../assets/css/barbeiros.css">
</head>
<body>
     <header id="cabecalho">
          <img src="../assets/img/logo.png" alt="logo" id ="logo">
          <h1 id="titulo">Meus barbeiros</h1>
          <img src="../assets/img/menu.png" alt="menu" id = "butaoJS">
          <nav id ="sidemenu">
               <ul>
                    <li class = "itensLista"><a href="">Meus clientes</a></li>
                    <li class = "itensLista"><a href="../cortes/cortes.php">Meus cortes</a></li>
                    <li class = "itensLista"><a href="">Meu lucro</a></li>
                    <li class = "itensLista"><a href="barbeiros.php">Meus barbeiros</a></li>
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
               if (isset($_SESSION['cadastro'])) {
                    echo $_SESSION['cadastro'];
               }
               unset($_SESSION['cadastro']);

               if (isset($_SESSION['excluido'])) {
                    echo $_SESSION['excluido'];
               }
               unset($_SESSION['excluido']);

               if (isset($_SESSION['erro'])) {
                    echo $_SESSION['erro'];
               }
               unset($_SESSION['erro']);

               if (isset($_SESSION['atualizado'])) {
                    echo $_SESSION['atualizado'];
               }

               if (isset($_SESSION['erro'])) {
                    echo $_SESSION['erro'];
               }

               if (isset($_SESSION['campoV'])) {
                    echo $_SESSION['campoV'];
               }
               unset($_SESSION['atualizado']);
          ?>
          <table border="1" width="100%" id ="tabela-barbeiros">
               <thead class="linha-cabecalho">
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Endereço</th>
                    <th>Telefone</th>
                    <th>CPF</th>
                    <th>ações</th>
               </thead>
               <tbody>
                    <?php 

                    require_once '../conexao.php';         
                    $stmt = $conexao->prepare("SELECT * FROM barbeiros ;");
                    $stmt->execute();         
                    while ($barbeiros = $stmt->fetch(PDO::FETCH_OBJ)) { ?>

                    <tr>
                        <td>
                              <?php echo $barbeiros->nome; ?>
                         </td>
                         <td>
                              <?php echo $barbeiros->idade; ?>
                         </td>
                             <td>
                              <?php echo $barbeiros->endereco; ?>
                         </td>
                         <td>
                              <?php echo $barbeiros->telefone; ?>
                         </td>
                         <td>
                              <?php echo $barbeiros->CPF; ?>
                         </td>
                         <td id ="botao_crud">
                              <div class = "acoes">
                                   <form action="deleteBarbeiros.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $barbeiros->id ?>">
                                        <input type="submit" value="excluir" id = "excluir">
                                   </form>
                              </div>
                              <div class = "acoes">
                                   <form action="updateBarbeirosForm.php" method="post">
                                        <input type="hidden" name="nome" value="<?php echo $barbeiros->nome ?>">
                                        <input type="hidden" name="idade" value="<?php echo $barbeiros->idade ?>">
                                        <input type="hidden" name="endereco" value="<?php echo $barbeiros->endereco?>">
                                        <input type="hidden" name="telefone" value="<?php echo $barbeiros->telefone?>">
                                        <input type="hidden" name="CPF" value="<?php echo $barbeiros->CPF?>">
                                        <input type="hidden" name="id" value="<?php echo $barbeiros->id?>">
                                        <input type="submit" value="atualizar" id = "atualizar">
                                   </form>
                              </div>
                         </td>
                    </tr> 
                    <?php } ?>
               </tbody>
          </table>
          <a href="createBarbeirosForm.php"><button id="botao-cadastrar">cadastrar barbeiros</button></a>
     </main>
          
    <script src = "../sidebar.js"></script>
</body>
</html>