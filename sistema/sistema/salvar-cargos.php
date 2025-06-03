<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

  <main>

       <!-- Telas CRUD -->
   <div id="cargos" class="tela">
    <form class="crud-form" action="./action/cargos.php" method="post">
      <h2>Cadastro de Cargos</h2>
      <input type="text" placeholder="Nome do Cargo">
      <input type="number" placeholder="Teto Salarial">
      <button type="submit">Salvar</button>
    </form>
  </div>



   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>
