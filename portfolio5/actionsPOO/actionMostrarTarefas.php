<?php

    header('Content-Type: application/json');

    require "../src/conexao.php";
    require "../src/Modelo/Tarefas.php";
    require "../src/Repositorio/TarefasRepositorio.php";

    $tarefasRepositorio = new TarefasRepositorio($pdo);
    $tarefasRepositorio->mostrarTarefas(); //chamando a função de mostrar notas


