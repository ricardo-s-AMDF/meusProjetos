<?php

    header('Content-Type: application/json');

    require "../src/conexao.php";
    require "../src/Modelo/Tarefas.php";
    require "../src/Repositorio/TarefasRepositorio.php";

    //dados pegos do form sendo passados na action para o BD
    $tarefas = new Tarefas
        (
            $_POST['idTarefas'],
            $_POST['nomeTarefa'],
            str_replace("\n", "/n", $_POST['descricaoTarefa'])
        );

    $tarefasRepositorio = new TarefasRepositorio($pdo);
    $tarefasRepositorio->editarTarefas($tarefas); //chamando a função de editar








