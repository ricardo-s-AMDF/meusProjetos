<?php

    header('Content-Type: application/json');

    require "../src/conexao.php";
    require "../src/Modelo/Tarefas.php";
    require "../src/Repositorio/TarefasRepositorio.php";

    $tarefasRepositorio = new TarefasRepositorio($pdo);
    $tarefasRepositorio->deletarTarefas($_POST['idTarefas']); //chamando a função de deletar








