<?php
    //onde é guardado as funções para usar nas actions
    class TarefasRepositorio
    {
        private PDO $pdo;

        public function __construct(PDO $pdo)
        {
            $this->pdo = $pdo;
        }

        public function cadastrarTarefas(Tarefas $tarefas)
        {
            $sqlInsere = "INSERT INTO tarefas (nomeTarefa, descricaoTarefa) VALUES (?, ?)";
            $resultado = $this->pdo->prepare($sqlInsere);
            $resultado->bindValue(1, $tarefas->getNomeTarefa());
            $resultado->bindValue(2, $tarefas->getDescricaoTarefa());
            $resultado->execute();
            if($resultado->rowCount() >= 1) {
                echo json_encode("Deu certo");
            }
            else {
                echo json_encode('Não tem nada');
            }
        }

        public function mostrarTarefas()
        {
            $sqlMostrar = "SELECT * FROM tarefas";
            $resultado = $this->pdo->prepare($sqlMostrar);
            $resultado->execute();

            if($resultado->rowCount() >= 1) {
                echo json_encode($resultado->fetchAll(PDO::FETCH_ASSOC));
            }
            else {
                echo json_encode('Não tem nada');
            }
        }

        public function editarTarefas(Tarefas $tarefas)
        {
            $sqlAtualiza = "UPDATE tarefas SET nomeTarefa = ?, descricaoTarefa = ? WHERE idTarefas = ?";
            $resultado = $this->pdo->prepare($sqlAtualiza);
            $resultado->bindValue(1, $tarefas->getNomeTarefa());
            $resultado->bindValue(2, $tarefas->getDescricaoTarefa());
            $resultado->bindValue(3, $tarefas->getIdTarefas());
            $resultado->execute();
            if($resultado->rowCount() >= 1) {
                echo json_encode("Deu certo");
            }
            else {
                echo json_encode('Não tem nada');
            }
        }

        public function deletarTarefas(int $idTarefas)
        {
            $sqlDelete = "DELETE FROM tarefas WHERE idTarefas = ?";
            $resultado = $this->pdo->prepare($sqlDelete);
            $resultado->bindValue(1, $idTarefas);
            $resultado->execute();
            if($resultado->rowCount() >= 1) {
                echo json_encode("Deu certo");
            }
            else {
                echo json_encode('Não tem nada');
            }
        }
    }