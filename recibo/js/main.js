/**
 * Passa os dados do cliente para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-cliente').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('cliente');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Cliente #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

$('#delete-modal-imprimir').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('recibo');
    
    var modal = $(this);
    modal.find('.modal-title').text('Deseja imprimir o Recibo #' + id);
    modal.find('#confirm').attr('href', 'addI.php?id=' + id);
    modal.find('#cancel').attr('href', 'add.php?id=' + id);
})
  
/**
 * Passa os dados do serviço para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-servico').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('servico');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Serviço #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
  
/**
 * Passa os dados do usuario para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-usuario').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('user');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Usuário #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})

/**
 * Passa os dados do recibo para o Modal, e atualiza o link para exclusão
 */
$('#delete-modal-recibo').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('recibo');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Recibo #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
  

$('#delete-modal-sRecibo').on('show.bs.modal', function (event) {
  
    var button = $(event.relatedTarget);
    var id = button.data('recibo');
    
    var modal = $(this);
    modal.find('.modal-title').text('Excluir Recibo #' + id);
    modal.find('#confirm').attr('href', 'delete.php?id=' + id);
})
$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

});