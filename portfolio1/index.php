<!doctype html>
<html lang="pt-BR" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Tela de Login</title>

    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/sign-in.css" rel="stylesheet">

  </head>
  
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    
    <main class="form-signin w-100 m-auto">
      <form action="actions/actionLogin.php" method="POST">
       <center><h1 class="h3 mb-3 fw-normal">Fazer Login</h1></center>
       <br>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="codUsuarios">
          <label for="floatingInput">Digite o Código Cadastrado</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="floatingPassword" name="senhaUsuarios">
          <label for="floatingPassword">Digite sua Senha</label>
        </div>
        <br>
        <button class="btn btn-primary w-100 py-2" type="submit">Entrar</button>
        <center><br><a href="cadastrarUsuarios.php">Cadastre-se</a></center>
      </form>
    </main>

    <script src="../script/bootstrap.bundle.min.js"></script>

    </body>
</html>
