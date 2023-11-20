<?php 
    $contador=1;
    INCLUDE '../conexao.php';

    $sqlJovem = "SELECT COUNT(idadePesquisa) AS totalJovem FROM pesquisa WHERE idadePesquisa BETWEEN 18 AND 24";
    $queryJovem = $mysqli->query($sqlJovem) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryJovem as $linhasJovem){ 
        
    $sqlAdulto = "SELECT COUNT(idadePesquisa) AS totalAdulto FROM pesquisa WHERE idadePesquisa BETWEEN 25 AND 49";
    $queryAdulto = $mysqli->query($sqlAdulto) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryAdulto as $linhasAdulto){ 

    $sqlExperiente = "SELECT COUNT(idadePesquisa) AS totalExperiente FROM pesquisa WHERE idadePesquisa BETWEEN 50 AND 64";
    $queryExperiente = $mysqli->query($sqlExperiente) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryExperiente as $linhasExperiente){ 

    $sqlIdoso = "SELECT COUNT(idadePesquisa) AS totalIdoso FROM pesquisa WHERE idadePesquisa BETWEEN 65 AND 999999999";
    $queryIdoso = $mysqli->query($sqlIdoso) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryIdoso as $linhasIdoso){ 

    
?>
<style>
.highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
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

input[type="number"] {
    min-width: 50px;
}

</style>
<script>
Highcharts.chart('containerIdade', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Faixa Etária dos Devs Participantes'
    },
   
    plotOptions: {
        series: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: [{
                enabled: true,
                distance: 20
            }, {
                enabled: true,
                distance: -40,
                format: '{point.percentage:.1f}%',
                style: {
                    fontSize: '1.2em',
                    textOutline: 'none',
                    opacity: 0.7
                },
                filter: {
                    operator: '>',
                    property: 'percentage',
                    value: 10
                }
            }]
        }
    },
    series: [
        {
            name: 'Votos',
            colorByPoint: true,
            data: [
                {
                    name: '18-24 anos',
                    y: <?php echo $linhasJovem['totalJovem'];?>
                },
                {
                    name: '25-49 anos',
                    y: <?php echo $linhasAdulto['totalAdulto'];?>
                },
                {
                    name: '50-64 anos',
                    y: <?php echo $linhasExperiente['totalExperiente'];?>
                },
                {
                    name: '65 anos para cima',
                    sliced: true,
                    selected: true,
                    y: <?php echo $linhasIdoso['totalIdoso'];?>
                }
            ]
        }
    ]
});

</script>

<?php 

    $contador=$contador+1;

    } } } } 
     
?>