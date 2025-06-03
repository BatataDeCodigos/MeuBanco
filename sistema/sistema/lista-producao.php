<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

<?php
 $sql = "SELECT p.ProdutoID as ProdutoID, pr.Nome AS Produto, p.DataProducao as DataProducao, p.DataEntrega AS DataEntrega
 FROM producao p
 INNER JOIN produtos AS pr ON p.ProdutoID = pr.ProdutoID ORDER BY p.ProdutoID ASC";
 $resultado = mysqli_query($conn,$sql);

?>
  <main>

    <div class="container">
        <h1>Lista de Produções</h1>
        <a href="./salvar-producao.php" class="btn btn-add">Incluir</a> 
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Produto</th>
              <th>Data Produção</th>
              <th>Data Entrega</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
          
          <?php
          while($dado = mysqli_fetch_assoc($resultado)){
            ?>
            <tr>
              <td>
                <?php
              echo $dado['ProdutoID']
              ?>
              </td>
              <td>
            <?php
            echo $dado['Produto']
            ?>
              </td>
              
              <td>
              <?php
            echo $dado['DataProducao']
            ?>
              </td>
              <td>
              <?php
            echo $dado['DataEntrega']
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