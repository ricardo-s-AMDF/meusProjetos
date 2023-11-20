<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Pergunta 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <audio autoplay loop>
    <source src="trilhas/suspense.mp3" type="audio/mpeg">
  </audio>
  <body>

    <div class="container mt-3">
      <h3>Pergunta 4</h3>
      <p>Assinale a opção em que é apresentada a instrução utilizada para alterar alguma propriedade de campo de uma tabela em um banco de dados.  </p>
      <?php 
        if(isset($_POST['alt'])){
          $resposta = $_POST['resposta'];

          if($resposta != 'Alter'){
            echo '<audio autoplay>
                  <source src="trilhas/errada.mp3" type="audio/mpeg">
                  </audio>
                  <div class="alert alert-danger">
                  <strong>Que pena!</strong> A resposta era Alter! Você acertou 3 de 5 questões e será enviado ao início do jogo! 
                  </div> <meta http-equiv="refresh" content="3; url=pergunta1.php">
                  <script>
                    document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("myRadio").disabled = true;
                    document.getElementById("myRadio2").disabled = true;
                    document.getElementById("myRadio3").disabled = true;
                    document.getElementById("myRadio4").disabled = true;
                    document.getElementById("myRadio5").disabled = true;  });
                  </script>';
                                }
          else{
            echo '<audio autoplay>
                  <source src="trilhas/certa.mp3" type="audio/mpeg">
                  </audio>
                  <div class="alert alert-success">
                  <strong>Parabéns!</strong> Resposta Correta!
                  </div> <meta http-equiv="refresh" content="1; url=pergunta5.php">
                  <script>
                    document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("myRadio").disabled = true;
                    document.getElementById("myRadio2").disabled = true;
                    document.getElementById("myRadio3").disabled = true;
                    document.getElementById("myRadio4").disabled = true;
                    document.getElementById("myRadio5").disabled = true;  });
                  </script>';

              }
                                }
      ?>
      <form action="" method="post">
        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio" name="resposta" value="Insert" required>    
          </div>
          <input type="text" class="form-control" placeholder="Insert" disabled > 
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio2" name="resposta" value="Update">    
          </div>
          <input type="text" class="form-control" placeholder="Update" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio3" name="resposta" value="Alter">    
          </div>
          <input type="text" class="form-control" placeholder="Alter" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio4" name="resposta" value="Modify">    
          </div>
          <input type="text" class="form-control" placeholder="Modify " disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio5" name="resposta" value="Drop">    
          </div>
          <input type="text" class="form-control" placeholder="Drop" disabled>
        </div>
        <button type="submit" name="alt">Responder</button>
      </form> 
    </div>
  </body>
</html>
