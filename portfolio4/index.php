<!DOCTYPE html>
<html>
  <head>
    <title>Show da Programação</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
      div{
        margin: 0;
        background: yellow;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%);
        }
      button{
        height: 90px;
        width: 280px;
            }
    </style>
  </head>
  <audio autoplay loop>
    <source src="trilhas/showdomilhao.mp3" type="audio/mpeg">
  </audio>
  <body style="background-color: #F8F9FA">
    <div class="p-5 text-center bg-body-tertiary rounded-3">

      <h1 style="font-size: 80px; color:black; margin-left: auto; margin-right: auto;">Show da Programação</h1> 
      <p style="font-size: 20px; color:black; margin-left: auto; margin-right: auto;">Bem-Vindo! Nesse jogo, você terá que responder 5 perguntas sobre programação</p> 
      <button style="color:black; margin-left: auto; margin-right: auto;" onclick="location.href='pergunta1.php';" class="d-inline-flex align-items-center btn btn-primary btn-lg px-4 rounded-pill" type="button">
          <center><h1 style="margin-left:16px">Clique aqui</h1></center>
      </button>
      <br>
      <br>
      <center><a href="../index.php">Voltar ao Portfólio</a></p></center>
    </div>
  </body>
</html>
