<?php 
    $contador=1;
    INCLUDE '../conexao.php';

    $sqlLucrativaJavaScript = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaJavaScript FROM pesquisa WHERE lucrativaPesquisa = 'JavaScript'";
    $queryLucrativaJavaScript = $mysqli->query($sqlLucrativaJavaScript) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaJavaScript as $linhasLucrativaJavaScript){  

    $sqlLucrativaPython = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaPython FROM pesquisa WHERE lucrativaPesquisa = 'Python'";
    $queryLucrativaPython = $mysqli->query($sqlLucrativaPython) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaPython as $linhasLucrativaPython){  

    $sqlLucrativaC = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaC FROM pesquisa WHERE lucrativaPesquisa = 'C'";
    $queryLucrativaC = $mysqli->query($sqlLucrativaC) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaC as $linhasLucrativaC){  

    $sqlLucrativaCmais = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaCmais FROM pesquisa WHERE lucrativaPesquisa = 'C++'";
    $queryLucrativaCmais = $mysqli->query($sqlLucrativaCmais) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaCmais as $linhasLucrativaCmais){  
        
    $sqlLucrativaCSharp = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaCSharp FROM pesquisa WHERE lucrativaPesquisa = 'C#'";
    $queryLucrativaCSharp = $mysqli->query($sqlLucrativaCSharp) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaCSharp as $linhasLucrativaCSharp){  
        
    $sqlLucrativaJava = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaJava FROM pesquisa WHERE lucrativaPesquisa = 'Java'";
    $queryLucrativaJava = $mysqli->query($sqlLucrativaJava) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaJava as $linhasLucrativaJava){  

    $sqlLucrativaPHP = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaPHP FROM pesquisa WHERE lucrativaPesquisa = 'PHP'";
    $queryLucrativaPHP = $mysqli->query($sqlLucrativaPHP) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaPHP as $linhasLucrativaPHP){  

    $sqlLucrativaSwift = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaSwift FROM pesquisa WHERE lucrativaPesquisa = 'Swift'";
    $queryLucrativaSwift = $mysqli->query($sqlLucrativaSwift) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaSwift as $linhasLucrativaSwift){  

    $sqlLucrativaGo = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaGo FROM pesquisa WHERE lucrativaPesquisa = 'Go'";
    $queryLucrativaGo = $mysqli->query($sqlLucrativaGo) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaGo as $linhasLucrativaGo){  

    $sqlLucrativaRuby = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaRuby FROM pesquisa WHERE lucrativaPesquisa = 'Ruby'";
    $queryLucrativaRuby = $mysqli->query($sqlLucrativaRuby) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaRuby as $linhasLucrativaRuby){  

    $sqlLucrativaSQL = "SELECT COUNT(lucrativaPesquisa) AS totalLucrativaSQL FROM pesquisa WHERE lucrativaPesquisa = 'SQL'";
    $queryLucrativaSQL = $mysqli->query($sqlLucrativaSQL) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryLucrativaSQL as $linhasLucrativaSQL){  
?>
<style>
.highcharts-figure,
.highcharts-data-table table {
    min-width: 360px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}
</style>
<script>// Data retrieved https://en.wikipedia.org/wiki/List_of_cities_by_average_temperature
Highcharts.chart('containerLucrativa', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Linguagens mais Lucrativas'
    },
    subtitle: {
        text: 'Na Opinião dos Participantes'
    },
    xAxis: {
        categories: ['JavaScript', 'Python', 'C', 'C++', 'C#', 'Java', 'PHP', 'Swift', 'Go', 'Ruby', 'SQL']
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
        name: 'Linguagens',
        data: [<?php echo $linhasLucrativaJavaScript['totalLucrativaJavaScript'];?>,
               <?php echo $linhasLucrativaPython['totalLucrativaPython'];?>,
               <?php echo $linhasLucrativaC['totalLucrativaC'];?>,
               <?php echo $linhasLucrativaCmais['totalLucrativaCmais'];?>,
               <?php echo $linhasLucrativaCSharp['totalLucrativaCSharp'];?>,
               <?php echo $linhasLucrativaJava['totalLucrativaJava'];?>,
               <?php echo $linhasLucrativaPHP['totalLucrativaPHP'];?>,
               <?php echo $linhasLucrativaSwift['totalLucrativaSwift'];?>,
               <?php echo $linhasLucrativaGo['totalLucrativaGo'];?>,
               <?php echo $linhasLucrativaRuby['totalLucrativaRuby'];?>,
               <?php echo $linhasLucrativaSQL['totalLucrativaSQL'];?>]
    }]
});

</script>
<?php 

    $contador=$contador+1;

    } } } } } } } } } } } 
     
?>