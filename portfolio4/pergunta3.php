<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <title>Pergunta 3</title>
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
      <h3>Pergunta 3</h3>
      <p>Qual instrução apresenta o conteúdo do primeiro elemento do vetor ou array declarado em PHP na forma:</p>
      <p>$estados = array("AM", "AP", "DF", "PR", "SP","SC", "RS"); ? </p>
      <?php 
        if(isset($_POST['alt'])){
          $resposta = $_POST['resposta'];

          if($resposta != 'echo $estados[0];'){
            echo '<audio autoplay>
                  <source src="trilhas/errada.mp3" type="audio/mpeg">
                  </audio>
                  <div class="alert alert-danger">
                  <strong>Que pena!</strong> A resposta era echo "$estados[0];"! Você acertou 2 de 5 questões e será enviado ao início do jogo! 
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
                  </div> <meta http-equiv="refresh" content="1; url=pergunta4.php">
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
            <input type="radio" id="myRadio" name="resposta" value="echo $estados[1];" required>    
          </div>
          <input type="text" class="form-control" placeholder="echo $estados[1];" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio2" name="resposta" value="print( $estados[1] );">    
          </div>
          <input type="text" class="form-control" placeholder="print( $estados[1] );" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio3" name="resposta" value="print_r( $estados[1] );">    
          </div>
          <input type="text" class="form-control" placeholder="print_r( $estados[1] );" disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio4" name="resposta" value="print( $estados );">    
          </div>
          <input type="text" class="form-control" placeholder="print( $estados ); " disabled>
        </div>

        <div class="input-group mb-3">
          <div class="input-group-text">
            <input type="radio" id="myRadio5" name="resposta" value="echo $estados[0];">    
          </div>
          <input type="text" class="form-control" placeholder="echo $estados[0];" disabled>
        </div>
        <button type="submit" name="alt">Responder</button>
      </form> 
    </div>
  </body>
</html>
