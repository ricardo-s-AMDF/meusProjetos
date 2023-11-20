<?php 
    $contador=1;
    INCLUDE '../conexao.php';

    $sqlADS = "SELECT COUNT(adsFaculdadePesquisa) AS totalADS FROM pesquisa WHERE adsFaculdadePesquisa = 'Análise e Desenvolvimento de Sistemas'";
    $queryADS = $mysqli->query($sqlADS) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryADS as $linhasADS){  

    $sqlEngenharia = "SELECT COUNT(adsFaculdadePesquisa) AS totalEngenharia FROM pesquisa WHERE adsFaculdadePesquisa = 'Engenharia de Software'";
    $queryEngenharia = $mysqli->query($sqlEngenharia) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryEngenharia as $linhasEngenharia){  


    $sqlCiencia = "SELECT COUNT(adsFaculdadePesquisa) AS totalCiencia FROM pesquisa WHERE adsFaculdadePesquisa = 'Ciência da Computação'";
    $queryCiencia = $mysqli->query($sqlCiencia) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryCiencia as $linhasCiencia){  


    $sqlSistema = "SELECT COUNT(adsFaculdadePesquisa) AS totalSistema FROM pesquisa WHERE adsFaculdadePesquisa = 'Sistemas de Informação'";
    $querySistema = $mysqli->query($sqlSistema) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($querySistema as $linhasSistema){  


?>

<script>// Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
Highcharts.chart('containerCursoSuperior', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Faculdade mais pedida nos Currículos'
    },
    subtitle: {
        text: 'Na Opinião dos Participantes'
    },
    xAxis: {
        categories: ['ADS', 'Engenharia de Software', 'Ciência da Computação', 'Sistemas de Informação']
    },
    yAxis: {
        title: {
            text: 'Quantidade de Votos'
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Cursos',
        data: [<?php echo $linhasADS['totalADS'];?>,
               <?php echo $linhasEngenharia['totalEngenharia'];?>,
               <?php echo $linhasCiencia['totalCiencia'];?>,
               <?php echo $linhasSistema['totalSistema'];?>


               ]
    }]
});

</script>
<?php 

    $contador=$contador+1;

    } } } }
     
?>