<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>

<form action="edit.php?id=<?php echo $cliente['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-7">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="cliente['nome']" value="<?php echo $cliente['nome']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">CPF</label>
      <input type="number" class="form-control" name="cliente['cpf_cnpj']" value="<?php echo $cliente['cpf_cnpj']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Data de Cadastro</label>
      <input type="text" class="form-control" name="cliente['created']" disabled value="<?php echo $cliente['created']; ?>">
    </div>
  </div>
  <div class="row">
    <div class="form-group col-md-3">
      <label for="campo1">Cidade</label>
      <input type="text" class="form-control" name="cliente['cidade']" value="<?php echo $cliente['cidade']; ?>">
    </div>



    <div class="form-group col-md-2">
      <label for="campo3">Telefone</label>
      <input type="number" class="form-control" name="cliente['telefone']" value="<?php echo $cliente['telefone']; ?>">
    </div>


  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>