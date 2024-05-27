//Adicionar nota

$('#crNotePad').submit(function(e){
    e.preventDefault();


    var dadosIdTarefa = $('#idTarefas').val();
    var dadosNomeTarefa = $('#nomeTarefa').val();
    var dadosDescricaoTarefa = $('#descricaoTarefa').val();

    $.ajax({
    url: 'actionsPOO/actionCadastrarTarefas.php',
    method: 'POST',
    data: {idTarefas: dadosIdTarefa, nomeTarefa: dadosNomeTarefa, descricaoTarefa: dadosDescricaoTarefa},
    dataType: 'json'
    }).done(function(result){
    // Mensagem quando uma nota é adicionada
    $("#successMsgAdd").append("<div class='alert alert-success'><strong>Sucesso!</strong> Sua nota foi adicionada!</div><meta http-equiv='refresh' content='1; url=index.php'>");
});
    });

    //Mostrar notas cadastradas

    function showNotePad() {
        $.ajax({
            url: 'actionsPOO/actionMostrarTarefas.php',
            method: 'GET',
            dataType: 'json'
        }).done(function (result) {
            //Condicional para caso não tiver nenhuma nota cadastrada!
            if(result == "Não tem nada"){
                $("#homepage").append('<center><svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" fill="currentColor" class="bi bi-sticky" viewBox="0 0 16 16"><path d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1zM2 2.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 .5.5V8H9.5A1.5 1.5 0 0 0 8 9.5V14H2.5a.5.5 0 0 1-.5-.5zm7 11.293V9.5a.5.5 0 0 1 .5-.5h4.293z"/></svg></center><h2>Você ainda não fez nenhum registro!</h2><br><center><h5>Clique no botão abaixo para adicionar uma nova nota</h5></center>');
            }
            else{
                for (var i = 0; i < result.length; i++){                
                    console.log(result[i].descricaoTarefa);

                    //cards com as notas
                    $(".row").prepend('<div class="col"><div class="card clock"><div class="card-header"><b>' + result[i].nomeTarefa + '</b></div><div class="card-body overflow-auto"><p>' +  result[i].descricaoTarefa.replace(/\/n/g, '<br>') + '</p></div><div class="card-footer"><button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myModal2" id="editButton" onclick="getItems(' +  result[i].idTarefas +', \'' +  result[i].nomeTarefa + '\' , \'' +  result[i].descricaoTarefa.replace(/\/n/g, '\\n') + '\');"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16"><path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"></path></svg> Editar Nota</button></div></div></div></div>');
                }    
            }
            
            //Laço que exibe os registros
            
        });
    }

    //função para pegar as notas já preenchidos que serão editadas ou excluídas

    function getItems(id, nome, descricao){
        $('#editaIdTarefas').val(id);
        $('#editaNomeTarefa').val(nome);
        $('#editaDescricaoTarefa').val(descricao);

        $('#excluirTarefas').val(id);
    
    }
    showNotePad(); //exibição das notas

//Editar nota

$('#uNotePad').submit(function(e){
    e.preventDefault();


    var dadosIdTarefa = $('#editaIdTarefas').val();
    var dadosNomeTarefa = $('#editaNomeTarefa').val();
    var dadosDescricaoTarefa = $('#editaDescricaoTarefa').val();

    $.ajax({
    url: 'actionsPOO/actionEditarTarefas.php',
    method: 'POST',
    data: {idTarefas: dadosIdTarefa, nomeTarefa: dadosNomeTarefa, descricaoTarefa: dadosDescricaoTarefa},
    dataType: 'json'
    }).done(function(result){// Mensagem quando uma nota é atualizada
        $("#successMsgUpdate").append("<div class='alert alert-success'><strong>Sucesso!</strong> Sua nota foi atualizada!</div><meta http-equiv='refresh' content='1; url=index.php'>");
    });
    });


//Excluir Nota    
$('#formId').submit(function(e){
    e.preventDefault();
    

    var dadosIdTarefa = $('#excluirTarefas').val();

    $.ajax({
    url: 'actionsPOO/actionDeletarTarefas.php',
    method: 'POST',
    data: {idTarefas: dadosIdTarefa},
    dataType: 'json'
    }).done(function(result){// Mensagem quando uma nota é adicionada
        $("#successMsgDelete").append("<div class='alert alert-success'><strong>Sucesso!</strong> Sua nota foi excluída!</div><meta http-equiv='refresh' content='1; url=index.php'>");
    });
    });



    
    

   






