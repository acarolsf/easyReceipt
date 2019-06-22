<?php 
	require_once('functions.php'); 
	view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Recibo <?php echo $recibo['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Data:</dt>
	<dd><?php echo $recibo['data']; ?></dd>

	<dt>Cliente:</dt>
	<dd><?php echo $recibo['id_cliente']; ?></dd>

	<dt>Vendedor:</dt>
	<dd><?php echo $recibo['id_usuario']; ?></dd>

	<dt>Valor:</dt>
	<dd><?php echo $recibo['valor']; ?></dd>

</dl>



<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $recibo['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include(FOOTER_TEMPLATE); ?>