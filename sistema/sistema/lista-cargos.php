<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';

$sql = "SELECT * FROM cargos;";
$resultado = mysqli_query($conn,$sql);

?>
  <main>

    <div class="container">
        <h1>Lista de Cargos</h1>
        <a href="./salvar-cargos.php" class="btn btn-add">Incluir</a>
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Teto Salárial</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              while($dado = mysqli_fetch_assoc($resultado)){
              
              
              ?>

              <td>
              <?php
              echo $dado['CargoID'];
              ?>
              </td>
            <td>
              <?php
              echo $dado['Nome'];
              ?>
              </td>
              <td>
              <?php
              echo $dado['TetoSalarial'];
              ?>
              </td>
              <td>
                <a href="#" class="btn btn-edit">Editar</a>
                <a href="#" class="btn btn-delete">Excluir</a>
              </td>

            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </div> 
  </main>
  
  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>