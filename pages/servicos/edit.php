<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Serviço</h2>

<form action="edit.php?id=<?php echo $servico['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="servico['descricao']" value="<?php echo $servico['descricao']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Preço</label>
      <input type="number" class="form-control" name="servico['preco']" value="<?php echo $servico['preco']; ?>">
    </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>