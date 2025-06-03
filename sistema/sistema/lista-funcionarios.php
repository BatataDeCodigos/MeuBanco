<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

<main>

  <div class="container">
      <h1>Lista de Funcionários</h1>
      <a href="./salvar-funcionarios.php" class="btn btn-add">Incluir</a> 
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cargo</th>
            <th>Setor</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
        <?php
            $sql = "SELECT f.FuncionarioID, f.Nome, cg.Nome AS Cargo, s.Nome AS Setor FROM funcionarios AS f
            INNER JOIN cargos AS cg ON cg.CargoID = f.CargoID
            INNER JOIN setor AS s ON s.SetorID = f.SetorID ORDER BY f.FuncionarioID ASC";
            $resultado = mysqli_query($conn,$sql);

              while($dado = mysqli_fetch_assoc($resultado) ) {
            ?>
          <tr>
            <td>
            <?php
            echo $dado['FuncionarioID'];
            ?>
            </td>
            <td>
            <?php
            echo $dado['Nome'];
            ?>
            </td>
            <td>
              <?php
              echo $dado['Cargo'];
              ?>
            </td>
            <td>
            <?php
            echo $dado['Setor'];
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

<?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>