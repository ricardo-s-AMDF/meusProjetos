<!DOCTYPE html>
<html lang="pt-BR">
  <head>
      <title>Bloco de Notas</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/styleNotePad.css" rel="stylesheet">
  </head>
  <body>
  
  <!-- aqui inicia o código -->
  <div class="container mt-3">
      <h2>Bloco de Notas</h2>
      <br>
  <!-- aqui fica a tela inicial que aparece somente quando o sistema não possui nenhum registro -->
      <div id="homepage">
      </div>
  <!-- aqui estão todos os registros em Card -->
      <div class="row gx-5 spaceRow">
      </div>
  </div>
  
  <!-- Botão para adicionar nota -->
  
  <button type="button" class="btn btn-outline-secondary positionButton" data-bs-toggle="modal" data-bs-target="#myModal"> Adicionar Nota
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"/>
      </svg>
  </button>
  
  <!-- Modal para adicionar nota -->
  
  <div class="modal fade" id="myModal">
      <div class="modal-dialog">
          <div class="modal-content">
  
              <div class="modal-header">
                  <h4 class="modal-title">Nova Nota</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
  
              <div class="modal-body">
                  <div id="successMsgAdd"></div><!-- Mensagem quando a nota é adicionada -->
                  <form id="crNotePad">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Título</label>
                          <input type="text" class="form-control" name="nomeTarefa" id="nomeTarefa">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                          <textarea class="form-control" name="descricaoTarefa" id="descricaoTarefa" rows="3"></textarea>
                      </div>
              </div>
  
              <div class="modal-footer">
                  <button type="submit" class="btn btn-outline-secondary">Adicionar</button>
                  </form>
              </div>       
          </div>
      </div>
  </div>
  
  <!-- Modal para editar nota -->
  
  <div class="modal fade" id="myModal2">
      <div class="modal-dialog">
          <div class="modal-content">
  
              <div class="modal-header">
                  <h4 class="modal-title">Editar Nota</h4>
                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">
                  <div id="successMsgUpdate"></div><!-- Mensagem quando a nota é atualizada -->
                  <div id="successMsgDelete"></div><!-- Mensagem quando a nota é excluída -->
  
                  <form id="uNotePad">
                      <div class="mb-3">
                          <label for="exampleFormControlInput1" class="form-label">Título</label>
                          <input type="text" class="form-control" name="nomeTarefa" id="editaNomeTarefa" maxlength="47">
                      </div>
                      <div class="mb-3">
                          <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                          <textarea class="form-control" name="descricaoTarefa" id="editaDescricaoTarefa" rows="3"></textarea>
                      </div>
                          <input type="hidden" name="idTarefas" id="editaIdTarefas">                
              </div>
              <div class="modal-footer">
                  <button type="submit" class="btn btn-outline-secondary">Editar</button>
                  </form>
                  <form id="formId">
                      <input type="hidden" name="idTarefas" id="excluirTarefas">
                          <button type="submit" class="btn btn-danger">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                              <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                              <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                          </svg>
                          </button>
                  </form>
              </div>
  
          </div>
      </div>
  </div>
  
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="assets/js/script.js"></script>
</html>
