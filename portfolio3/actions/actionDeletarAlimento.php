<?php session_start();?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Deletando</title>

<?php
	INCLUDE '../../conexao.php';

	$id = $_GET['id'];

	$sqldelete = "DELETE FROM alimento WHERE idAlimento = $id";
	$query = $mysqli->prepare($sqldelete);
	$resultado = $query->execute();

	if($resultado){
		echo '<div class="alert alert-success">
		<strong>Sucesso!</strong> Registro Excluído do Sistema!
		</div><meta http-equiv="refresh" content="1; url=../index.php">';
	}

	else {
		echo '<div class="alert alert-danger">
		<strong>Erro</strong> 
		</div>';
	}


?>