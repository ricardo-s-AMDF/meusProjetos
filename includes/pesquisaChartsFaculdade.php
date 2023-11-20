<?php 
    $contador=1;
    INCLUDE '../conexao.php';

    $sqlMuitoImportante = "SELECT COUNT(faculdadePesquisa) AS totalMuitoImportante FROM pesquisa WHERE faculdadePesquisa = 'Muito Importante'";
    $queryMuitoImportante = $mysqli->query($sqlMuitoImportante) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryMuitoImportante as $linhasMuitoImportante){  

    $sqlImportante = "SELECT COUNT(faculdadePesquisa) AS totalImportante FROM pesquisa WHERE faculdadePesquisa = 'Importante, porém não é única coisa que precisa ter'";
    $queryImportante = $mysqli->query($sqlImportante) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryImportante as $linhasImportante){  

    $sqlIndiferente = "SELECT COUNT(faculdadePesquisa) AS totalIndiferente FROM pesquisa WHERE faculdadePesquisa = 'Não faz diferença'";
    $queryIndiferente = $mysqli->query($sqlIndiferente) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryIndiferente as $linhasIndiferente){  

    $sqlDesnecessario = "SELECT COUNT(faculdadePesquisa) AS totalDesnecessario FROM pesquisa WHERE faculdadePesquisa = 'É desnecessário, por conta dos cursos especializados na internet'";
    $queryDesnecessario = $mysqli->query($sqlDesnecessario) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryDesnecessario as $linhasDesnecessario){  

?>

<script>
Highcharts.chart('containerFaculdade', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Nível de Importância de um Curso Superior no Currículo',
        align: 'left'
    },
    subtitle: {
        text:
            'Na Opinião dos Participantes',
        align: 'center'
    },
    xAxis: {
        categories: ['Muito Importante', 'Importante, porém não é única coisa que precisa ter', 'Não faz diferença', 'É desnecessário, por conta dos cursos especializados na internet'],
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
    tooltip: {
        valueSuffix: ''
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
            data: [<?php echo $linhasMuitoImportante['totalMuitoImportante'];?>, 
                   <?php echo $linhasImportante['totalImportante'];?>, 
                   <?php echo $linhasIndiferente['totalIndiferente'];?>, 
                   <?php echo $linhasDesnecessario['totalDesnecessario'];?>]
        }
    ]
});

</script>
<?php 

    $contador=$contador+1;

    } } } } 
     
?>