<?php 
  require_once('functions.php'); 
  add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Serviço</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-12">
      <label for="descricao">Descricao</label>
      <input type="text" class="form-control" name="servico['descricao']">
    </div>

    <div class="form-group col-md-3">
      <label for="preco">Preco</label>
      <input type="number" class="form-control" name="servico['preco']">
    </div>

    
  </div>
  

  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>