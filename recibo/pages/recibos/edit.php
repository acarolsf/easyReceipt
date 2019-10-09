<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Recibo</h2>

<form action="edit.php?id=<?php echo $recibo['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Data</label>
      <input type="text" class="form-control" name="recibo['data']" value="<?php echo $recibo['data']; ?>" disabled>
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Cliente</label>
      <input type="text" class="form-control" name="recibo['id_cliente']" value="<?php echo $recibo['id_cliente']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Vendedor</label>
      <input type="number" class="form-control" name="recibo['id_usuario']" value="<?php echo $recibo['id_usuario']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Serviços</label>
      <input type="number" class="form-control" name="recibo['id_servicos']" value="<?php echo $recibo['id_servicos']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Valor</label>
      <input type="number" class="form-control" name="recibo['valor']" value="<?php echo $recibo['valor']; ?>">
    </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>