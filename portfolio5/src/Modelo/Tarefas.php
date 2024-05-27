<?php
    //itens do sistema
    class Tarefas
    {
        private ?int $idTarefas;
        private string $nomeTarefa;
        private string $descricaoTarefa;

        public function __construct(?int $idTarefas, string $nomeTarefa, string $descricaoTarefa)
        {
            $this->idTarefas = $idTarefas;
            $this->nomeTarefa = $nomeTarefa;
            $this->descricaoTarefa = $descricaoTarefa;
        }

        public function getIdTarefas(): ?int
        {
            return $this->idTarefas;
        }

        public function getNomeTarefa(): string
        {
            return $this->nomeTarefa;
        }

        public function getDescricaoTarefa(): string
        {
            return $this->descricaoTarefa;
        }

    }