<!DOCTYPE html>
<html>
  <head>
    <title>Pesquisa de Opinião</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <?php 
    INCLUDE '../conexao.php';
    if(isset($_POST['alt'])){
      $opiniao = $_POST['opiniao'];
      $sqlinsere = "INSERT INTO opiniao (opiniao) VALUES ('$opiniao')";

      $query = $mysqli->prepare($sqlinsere);
      $resultado = $query->execute();

      if($resultado) {
        echo '<div class="alert alert-success">
              <strong>Muito Obrigado!</strong> Sua contribuição é muito importante!
              </div><meta http-equiv="refresh" content="10; url=index.php">';
                     }

      else {
        echo '<div class="alert alert-danger">
              <strong>Erro</strong> 
              </div>';
           }

                           }

  ?>
    <form method="post">
      <div class="container mt-3">
        <div class="mb-3">
          <h2>Feedback sobre esse portfólio</h2>
          <label for="exampleFormControlTextarea1" class="form-label">Qual sua opinião sobre esse portfólio? No que ele precisa melhorar?</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="opiniao" rows="3"></textarea>
          <br>
          <button type="submit" name="alt" class="btn btn-primary">Registrar</button>
          <button type="button" onclick="location.href='../index.php';" style="margin-left: 25px;" name="alt" class="btn btn-danger">Voltar ao Portfólio</button>

        </div>
      </div>
    </form>
    <script src="../script/bootstrap.bundle.min.js"></script>
  </body>
</html>
