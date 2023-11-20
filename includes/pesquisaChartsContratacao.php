<?php 
    $contador=1;
    INCLUDE '../conexao.php';

    $sqlCLT = "SELECT COUNT(contratacaoPesquisa) AS totalCLT FROM pesquisa WHERE contratacaoPesquisa = 'CLT'";
    $queryCLT = $mysqli->query($sqlCLT) or die("Falha na execução do código SQL: " . $mysqli->error);
    
    foreach ($queryCLT as $linhasCLT){  

    $sqlPJ = "SELECT COUNT(contratacaoPesquisa) AS totalPJ FROM pesquisa WHERE contratacaoPesquisa = 'PJ'";
    $queryPJ = $mysqli->query($sqlPJ) or die("Falha na execução do código SQL: " . $mysqli->error);
    
    foreach ($queryPJ as $linhasPJ){  
       


?>

<script>
Highcharts.chart('containerContratacao', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Melhor Forma de Contratação',
        align: 'left'
    },
    subtitle: {
        text:
            'Na Opinião dos Participantes',
        align: 'left'
    },
    xAxis: {
        categories: ['CLT', 'PJ'],
        crosshair: true,
        accessibility: {
            description: 'Countries'
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Quantidade de Votos'
        }
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [
        {
            name: 'Votos',
            data: [<?php echo $linhasCLT['totalCLT'];?>, 
                   <?php echo $linhasPJ['totalPJ'];?>]
        }
    ]
});

</script>
<?php 

    $contador=$contador+1;

    } }
     
?>