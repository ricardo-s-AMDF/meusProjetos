<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabela de Estoque</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
</head>
<body>
  <div class="container mt-3">
    <h2>Tabela de Estoque com DataTables</h2>
    <p>CRUD simples usando PHP e MySQL! Caso queira voltar ao menu, <a href="../index.php">clique aqui!</a></p>
    <a href="cadastrarAlimento.php" role="button" class="btn btn-primary">      
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
      </svg>
      Registrar Alimento
    </a>
    <br>
    <br>
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th>Nome do Alimento</th>
              <th>Grupo Alimentar</th>
              <th>Ações</th>
          </tr>
      </thead>
      <tbody>
        <?php 

          $contador=1;
          INCLUDE '../conexao.php';
          $sql = "SELECT * FROM alimento";
          $query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);;
          foreach ($query as $linhas){  

        ?>
        <tr>
            <td><?php echo $linhas['nomeAlimento']; ?></td>
            <td><?php echo $linhas['grupoAlimentar']; ?></td>
            <td> 
              <a href="editarAlimento.php?id=<?php echo $linhas['idAlimento'];?>">    
                <svg xmlns="http://www.w3.org/2000/svg" color="blue" width="18" height="18" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                </svg>
              </a>
              <a href="actions/actionDeletarAlimento.php?id=<?php echo $linhas['idAlimento'];?>">        
                  <svg xmlns="http://www.w3.org/2000/svg" color="red" width="18" height="18" fill="currentColor" class="bi bi-person-fill-x" viewBox="0 0 16 16">
                      <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Z"/>
                      <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm-.646-4.854.646.647.646-.647a.5.5 0 0 1 .708.708l-.647.646.647.646a.5.5 0 0 1-.708.708l-.646-.647-.646.647a.5.5 0 0 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 .708-.708Z"/>
                  </svg>
              </a> 
              </td>
        </tr>          
        <?php } ?>
        </tbody>
    </table>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
<script>
  $(document).ready(function() {
      $('#example').DataTable( {
          "language": {
              "url": "//cdn.datatables.net/plug-ins/1.13.4/i18n/pt-BR.json"
          }
      } );
  } );
  $(document).ready(function () {
      $('#example').DataTable();
  });
</script>
</html>