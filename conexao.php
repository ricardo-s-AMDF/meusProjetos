<?php 
$hostname = "localhost"; //esses dados são pertencentes ao meu servidor local, que no caso, não é da hospedagem utilizada no portfolio apresentado
$bancodedados = "portfolio";
$usuario = "root";
$senha = "senha";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (". $mysqli->connect_errno . ") " . $mysqli->connect_errno;
}

?>
