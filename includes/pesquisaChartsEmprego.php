<?php 
    $contador=1;
    INCLUDE '../conexao.php';

    $sqlFinalizarFacul = "SELECT COUNT(faculdadePesquisa) AS totalFinalizarFacul FROM pesquisa WHERE empregoPesquisa = 'Ter concluído a faculdade'";
    $queryFinalizarFacul = $mysqli->query($sqlFinalizarFacul) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryFinalizarFacul as $linhasFinalizarFacul){  

    $sqlPortfolio = "SELECT COUNT(faculdadePesquisa) AS totalPortfolio FROM pesquisa WHERE empregoPesquisa = 'Construir um portfólio com seus projetos'";
    $queryPortfolio = $mysqli->query($sqlPortfolio) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryPortfolio as $linhasPortfolio){  

    $sqlGitHub = "SELECT COUNT(faculdadePesquisa) AS totalGitHub FROM pesquisa WHERE empregoPesquisa = 'Hospedar os códigos do seus projetos no GitHub'";
    $queryGitHub = $mysqli->query($sqlGitHub) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryGitHub as $linhasGitHub){  

    $sqlCursos = "SELECT COUNT(faculdadePesquisa) AS totalCursos FROM pesquisa WHERE empregoPesquisa = 'Ter vários certificados de cursos especializados'";
    $queryCursos = $mysqli->query($sqlCursos) or die("Falha na execução do código SQL: " . $mysqli->error);;
    foreach ($queryCursos as $linhasCursos){ 




    

?>

<script>
Highcharts.chart('containerEmprego', {
    chart: {
        type: 'pie'
    },
    title: {
        text: 'Primordial para o Currículo do Dev'
    },
    tooltip: {
        valueSuffix: ''
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
                    name: 'Ter concluído a faculdade',
                    y: <?php echo $linhasFinalizarFacul['totalFinalizarFacul'];?>
                },
                {
                    name: 'Construir um portfólio com seus projetos',
                    y: <?php echo $linhasPortfolio['totalPortfolio'];?>
                },
                {
                    name: 'Hospedar os códigos do seus projetos no GitHub',
                    y: <?php echo $linhasGitHub['totalGitHub'];?>
                },
                {
                    name: 'Ter vários certificados de cursos especializados',
                    sliced: true,
                    selected: true,
                    y: <?php echo $linhasCursos['totalCursos'];?>
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