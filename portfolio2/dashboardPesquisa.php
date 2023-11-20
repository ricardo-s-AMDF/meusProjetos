<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="../style/bootstrap.min.css" rel="stylesheet">
    <link href="../style/responsivo.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/grid/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  </head>
  <body>
    <div class="container mt-3">
      <h2>Dashboard feito com HighCharts</h2>
      <p>Através dos dados inseridos, foram feitos filtros em forma de gráficos! Caso queira voltar ao menu, <a href="../index.php">clique aqui!</a></p>
      <div class="card">
        <div class="card-body">
        <div class="row mb-3 text-center">
          <div class="col-4 themed-grid-col responsivo"><div style="width: 400px; height: 300px;" id="containerIdade"></div></div>
          <div class="col-4 themed-grid-col responsivo"><div style="width: 400px; height: 300px;" id="containerLucrativa"></div></div>
          <div class="col-4 themed-grid-col responsivo"><div style="width: 400px; height: 300px;" id="containerFaculdade"></div></div>
        </div>
        <div class="row mb-3 text-center">
          <div class="col-4 themed-grid-col responsivo"><div style="width: 400px; height: 300px;" id="containerEmprego"></div></div>
          <div class="col-4 themed-grid-col responsivo"><div style="width: 400px; height: 300px;" id="containerContratacao"></div></div>
          <div class="col-4 themed-grid-col responsivo"><div style="width: 400px; height: 300px;" id="containerCursoSuperior"></div></div>
        </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/funnel.js"></script>
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    
    <?php INCLUDE '../includes/pesquisaChartsIdade.php';?>
    <?php INCLUDE '../includes/pesquisaChartsLucrativa.php';?>
    <?php INCLUDE '../includes/pesquisaChartsEmprego.php';?>  
    <?php INCLUDE '../includes/pesquisaChartsContratacao.php';?>
    <?php INCLUDE '../includes/pesquisaChartsFaculdade.php';?>
    <?php INCLUDE '../includes/pesquisaChartsCursoSuperior.php';?>
  </body>
</html>
    
    
    
    











