/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('cliente');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
  
/**
 * Passa os dados do serviço para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('servico');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Serviço #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
  
/**
 * Passa os dados do usuario para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('user');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Usuário #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
  })