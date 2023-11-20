<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Pergunta 1</title>
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
      <h3>Pergunta 1</h3>
      <p>Qual das opções abaixo, seria uma Linguagem de Marcação?</p>
      <?php 
        if(isset($_POST['alt'])){
          $resposta = $_POST['resposta'];

          if($resposta != "HTML"){
            echo '<audio autoplay>
                  <source src="trilhas/errada.mp3" type="audio/mpeg">
                  </audio>
                  <div class="alert alert-danger">
                  <strong>Que pena!</strong> A resposta era HTML! Você acertou 0 de 5 questões!  
                  </div><meta http-equiv="refresh" content="5; url=pergunta1.php">';
                                 }
          else{
            echo '<audio autoplay>
                  <source src="trilhas/certa.mp3" type="audio/mpeg">
                  </audio>
                  <div class="alert alert-success">
                  <strong>Parabéns!</strong> Resposta Correta!
                  </div> <meta http-equiv="refresh" content="1; url=pergunta2.php">
                  <script>
                    document.addEventListener("DOMContentLoaded", function(event) {
                    document.getElementById("myRadio").disabled = true;
                    document.getElementById("myRadio2").disabled = true;
                    document.getElementById("myRadio3").disabled = true;
                    document.getElementById("myRadio4").disabled = true;
                    document.getElementById("myRadio5").disabled = true; });
                  </script>';

              }
                                }
      ?>
      <form action="" method="post">
        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio" name="resposta" value="HTML" required>    
          </div>
          <input type="text" class="form-control" placeholder="HTML" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio2" name="resposta" value="CSS">    
          </div>
          <input type="text" class="form-control" placeholder="CSS" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio3" name="resposta" value="PHP">    
          </div>
          <input type="text" class="form-control" placeholder="PHP" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio4" name="resposta" value="Oracle">     
          </div>
          <input type="text" class="form-control" placeholder="Oracle" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio5" name="resposta" value="Sony">    
          </div>
          <input type="text" class="form-control" placeholder="Sony" disabled>
        </div>
        <button type="submit" name="alt">Responder</button>
      </form> 


    </div>
  </body>
</html>
