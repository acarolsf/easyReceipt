<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Serviço <?php echo $servico['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Descrição:</dt>
	<dd><?php echo $servico['descricao']; ?></dd>

	<dt>Preço:</dt>
	<dd><?php echo $servico['preco']; ?></dd>

</dl>



<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $servico['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>