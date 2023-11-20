<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<?php 
INCLUDE '../../conexao.php';

$nomePesquisa = $_POST['nomePesquisa'];
$idadePesquisa = $_POST['idadePesquisa'];
$lucrativaPesquisa = $_POST['lucrativaPesquisa'];
$faculdadePesquisa = $_POST['faculdadePesquisa'];
$empregoPesquisa = $_POST['empregoPesquisa'];
$editorPesquisa = $_POST['editorPesquisa'];
$adsFaculdadePesquisa = $_POST['adsFaculdadePesquisa'];
$contratacaoPesquisa = $_POST['contratacaoPesquisa'];


$sqlinsere = "INSERT INTO pesquisa (nomePesquisa, idadePesquisa, lucrativaPesquisa, faculdadePesquisa, empregoPesquisa, editorPesquisa, adsFaculdadePesquisa, contratacaoPesquisa) VALUES
('$nomePesquisa', '$idadePesquisa', '$lucrativaPesquisa', '$faculdadePesquisa', '$empregoPesquisa', '$editorPesquisa', '$adsFaculdadePesquisa', '$contratacaoPesquisa')";

$query = $mysqli->prepare($sqlinsere);
$resultado = $query->execute();

if($resultado) {
	echo '<div class="alert alert-success">
	<strong>Sucesso!</strong> Pesquisa Registrada!
  	</div><meta http-equiv="refresh" content="1; url=../dashboardPesquisa.php">';
			   }

else {
	echo '<div class="alert alert-danger">
  	<strong>Erro</strong> 
	</div>';
	 }


?>