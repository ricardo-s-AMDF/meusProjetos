<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Editando</title>

<?php 
	INCLUDE '../../conexao.php';

	$nomeAlimento = $_POST['nomeAlimento'];
	$grupoAlimentar = $_POST['grupoAlimentar'];
	$id = $_POST['idAlimento'];

	$sqlatualiza = "UPDATE alimento SET nomeAlimento = '$nomeAlimento', grupoAlimentar = '$grupoAlimentar'
	WHERE idAlimento = '$id'";

	$query = $mysqli->prepare($sqlatualiza);
	$resultado = $query->execute();


	if($resultado) {
		echo '<div class="alert alert-success">
		<strong>Sucesso!</strong> Registro Editado!
		</div><meta http-equiv="refresh" content="1; url=../index.php">';
				}

	else {
		echo '<div class="alert alert-danger">
		<strong>Erro</strong> 
		</div>';
		}


?>