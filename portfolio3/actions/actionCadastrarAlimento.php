<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Cadastrando</title>
<?php 
	INCLUDE '../../conexao.php';

	$nomeAlimento = $_POST['nomeAlimento'];
	$grupoAlimentar = $_POST['grupoAlimentar'];



	$sqlinsere = "INSERT INTO alimento (nomeAlimento, grupoAlimentar) VALUES
	('$nomeAlimento', '$grupoAlimentar')";

	$query = $mysqli->prepare($sqlinsere);
	$resultado = $query->execute();

	if($resultado) {
		echo '<div class="alert alert-success">
		<strong>Sucesso!</strong> Alimento Cadastrado!
		</div><meta http-equiv="refresh" content="1; url=../index.php">';
				}

	else {
		echo '<div class="alert alert-danger">
		<strong>Erro</strong> 
		</div>';
		}


?>