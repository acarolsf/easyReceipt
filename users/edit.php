<?php 
  require_once('functions.php'); 
  edit();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Usuário</h2>

<form action="edit.php?id=<?php echo $user['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-12">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="user['nome']" value="<?php echo $user['nome']; ?>">
    </div>

    <div class="form-group col-md-12">
      <label for="campo2">E-mail</label>
      <input type="email" class="form-control" name="user['email']" value="<?php echo $user['email']; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="user['username']" value="<?php echo $user['username']; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" name="user['senha']" value="<?php echo $user['senha']; ?>">
    </div>

  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>