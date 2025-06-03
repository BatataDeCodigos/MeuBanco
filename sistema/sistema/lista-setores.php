<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>
  <main>

    <div class="container">
        <h1>Lista de Setores</h1>
        <a href="./salvar-setores.php" class="btn btn-add">Incluir</a>
        
        <table>
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Andar</th>
              <th>Cor</th>
              <th>Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>

              <?php
              $sql = "SELECT SetorID, Nome, Andar, Cor FROM Setor ORDER BY SetorID ASC";

              $resultado = mysqli_query($conn,$sql);

              while($dado = mysqli_fetch_assoc($resultado)){
              
              
              ?>

            <td>
              <?php
              echo $dado['SetorID'];
              ?>
              </td>
              <td>
              <?php
              echo $dado['Nome'];
              ?>
              </td>
              <td>
              <?php
              echo $dado['Andar'];
              ?>
              </td> 
            <td>
              <?php
              echo $dado['Cor'];
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