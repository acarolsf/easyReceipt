<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php include(HEADER_TEMPLATE); ?>
<?php $db = open_database(); ?>

<?php include(HEADER_TEMPLATE); ?>
<?php 
$servicos: array;
?>

<h2>Novo Recibo</h2>


<form action="add.php" method="post">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <!-- <div class="form-group col-md-6">
            <label for="idd">id</label>
            <input type="text" class="form-control" value="<?php echo $recibo['id']?>" name="recibo['id']" disabled>
        </div> -->
        <div class="form-group col-md-3">
            <label for="data">Data</label>
            <input type="date" class="form-control" name="data" disabled>
        </div>
        <div class="form-group col-md-8">
            <label for="name">Cliente</label>
            <input type="text" class="form-control" name="cliente">
        </div>
        <form action="add.php" method="post">
            <div class="form-group col-md-8">
                <label for="servicos">Serviços</label>
                <input type="text" class="form-control" name="servico">
            </div>
            <div class="form-group col-md-2" style="margin-top:25px">
                <button type="button" onClick="addS()"  class="btn btn-primary bmd-btn-fab">
                    <i class="material-icons fa fa-plus"></i>
                </button>
            </div>
        </form>
        <div class="form-group col-md-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th width="30%">Descrição</th>
                        <th>Preço</th>
                        <th>Opções</th>
                    </tr>
                </thead>
                <tr>
                    <td><?php echo $sRecibo['id']; ?></td>
                    <td><?php echo $sRecibo['descricao']; ?></td>
                    <td><?php echo $sRecibo['preco']; ?></td>
                    <td class="actions text-right">
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                            data-target="#delete-modal-sRecibo" data-servico="<?php echo $sRecibo['id']?>">
                            <i class="fa fa-trash"></i> Excluir
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php else : ?>
                <tr>
                    <td colspan="6">Nenhum registro encontrado.</td>
                </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#delete-modal-imprimir">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>