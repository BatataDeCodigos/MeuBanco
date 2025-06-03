<?php 
// include dos arquivox
include_once './include/logado.php';
include_once './include/conexao.php';
include_once './include/header.php';
?>

  
  <main>

    <div id="funcionarios" class="tela">
        <form class="crud-form">
          <h2>Cadastro de Funcionários</h2>
          <input type="text" placeholder="Nome">
          <input type="date" placeholder="Data de Nascimento">
          <input type="email" placeholder="Email">
          <input type="number" placeholder="Salário">
          <select>
            <option value="">Sexo</option>
            <option value="M">Masculino</option>
            <option value="F">Feminino</option>
          </select>
          <input type="text" placeholder="CPF">
          <input type="text" placeholder="RG">
          <select>
            <option value="">Cargo</option>
          </select>
          <select>
            <option value="">Setor</option>
          </select>
          <button type="submit">Salvar</button>
        </form>
      </div>


   
  </main>

  <?php 
  // include dos arquivox
  include_once './include/footer.php';
  ?>
