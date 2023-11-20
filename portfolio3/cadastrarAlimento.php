<!doctype html>
<html lang="pt-BR" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Registro de Alimentos</title>
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/sign-in.css" rel="stylesheet">
  </head>
  <body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto">
      <form action="actions/actionCadastrarAlimento.php" method="POST" enctype="multipart/form-data">
        <center><h1 class="h3 mb-3 fw-normal">Registro de Alimentos</h1></center>
        <br>
        <div class="form-floating">
          <input type="text" class="form-control" id="floatingInput" name="nomeAlimento">
          <label for="floatingInput">Digite o nome do alimento</label>
        </div>
        <br>
        <select class="form-control" id="floatingInput" name="grupoAlimentar">
          <option value="Cereais, pães e tubérculos">Cereais, pães e tubérculos</option>
          <option value="Hortaliças">Hortaliças</option>
          <option value="Frutas">Frutas</option>
          <option value="Leguminosas">Leguminosas</option>
          <option value="Carnes e ovos">Carnes e ovos</option>
          <option value="Leite e derivados">Leite e derivados</option>
          <option value="Óleos e gorduras">Óleos e gorduras</option>
          <option value="Açúcares">Açúcares</option>
        </select>
        <br>
        <button class="btn btn-primary w-100 py-2" type="submit">Registrar</button>
      </form>
    </main>
  <script src="../script/bootstrap.bundle.min.js"></script>
  <script src="../script/color-modes.js"></script>

  </body>
</html>
