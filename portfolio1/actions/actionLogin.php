<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Entrando</title>
<?php

INCLUDE "../../conexao.php";


$codUsuarios = $_POST['codUsuarios'];
$senhaUsuarios = md5($_POST['senhaUsuarios']);

$sql = "SELECT * FROM usuarios WHERE codUsuarios = '$codUsuarios' AND senhaUsuarios = '$senhaUsuarios'";
$query = $mysqli->query($sql) or die("Falha na execução do código SQL: " . $mysqli->error);
$quantidadeLinhas = $query->num_rows;
$usuario = $query->fetch_assoc();  

if ($quantidadeLinhas == 1) {
  echo '<div class="alert alert-success" >
          <strong>Login Correto!</strong> Sendo redirecionado para o Menu Principal!
        </div>
        <meta http-equiv="refresh" content="1; url=../tabelaUsuariosCadastrados.php">';
  if(!isset($_SESSION)){
      session_start();
                       }
    $_SESSION['nomeUser'] = $usuario['nomeUsuarios'];
    $_SESSION['id'] = $usuario['idUsuarios'];

        


                           }
else {
      echo '<div class="alert alert-danger">
              <strong>Login Errado!</strong> Sendo redirecionado para o Menu Principal!
            </div>
            <meta http-equiv="refresh" content="1; url=../index.php">';;
     }
?>