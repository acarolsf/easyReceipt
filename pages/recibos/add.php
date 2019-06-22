<?php 
  require_once('functions.php'); 
  add();
  addS();
  deleteS();
  indexS();
  global $servicos;
  $servicos = find_all('servicos');
  global $clientes;
  $clientes = find_all('clientes');
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Recibo</h2>


<form action="add.php" method="post">
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-3">
            <label for="campo2">Data</label>
            <input type="text" class="form-control" name="recibo['data']" disabled>
        </div>
        <div class="form-group col-md-8">
            <label for="name">Cliente</label>
            <select class="form-control" name="recibo['id_cliente']">
                <?php if ($clientes) : ?>
                <?php foreach ($clientes as $cliente) : ?>
                <option value="<?php echo $cliente['id']; ?>"><?php echo $cliente['nome']; ?></option>
                <?php endforeach; ?>
                <?php else : ?>
                <option value="">Nenhum serviço encontrado</option>
                <?php endif; ?>
            </select>
</div>
            <div class="form-group col-md-8">
                <label for="servicos">Serviços</label>
                <select class="form-control" name="recibo[id_servico]">
                    <?php if ($servicos) : ?>
                    <?php foreach ($servicos as $servico) : ?>
                    <option value="<?php echo $servico['id']; ?>"><?php echo $servico['descricao']; ?></option>
                    <?php endforeach; ?>
                    <?php else : ?>
                    <option value="">Nenhum serviço encontrado</option>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form-group col-md-2" style="margin-top:25px">
                <button type="submit" onClick="addS()"  class="btn btn-primary bmd-btn-fab">
                    <i class="material-icons fa fa-plus"></i>
                </button>
            </div>
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
                <?php if ($sRecibos) : ?>
                <?php foreach ($sRecibos as $sRecibo) : ?>
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
                <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#delete-modal-imprimir" 
                data-servico="<?php echo $recibo['id']?>">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>