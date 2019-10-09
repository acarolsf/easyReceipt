<div class="row">
    <div class="col-xs-12">
        <div class="entry-content wentry__entry-content">
			<?php the_content(); ?>
        </div>
		<?php
		$estabelecimentos = get_field( 'estabelecimentos' );
		if ( $estabelecimentos ):
			?>
            <div class="store-list">
				<?php foreach ( $estabelecimentos as $estabelecimento ): ?>
                    <div class="store-list__store media">
                        <div class="media-left">
                            <img src="<?php echo $estabelecimento['imagem']['url']; ?>"
                                 class="store-list__store-image media-object"
                                 alt="<?php echo $estabelecimento['nome']; ?>">
                        </div>
                        <div class="media-body">
                            <h2 class="store-list__store-name media-heading"><?php echo $estabelecimento['nome']; ?></h2>
                            <address
                                    class="store-list__store-address"><?php echo $estabelecimento['endereco']; ?></address>
							<?php if ( $estabelecimento['telefones'] ): ?>
                                <span class="store-list__store-phones-title">Telefone(s): </span>
                                <ul class="store-list__store-phones-list">
									<?php foreach ( $estabelecimento['telefones'] as $telelefone ): ?>
                                    <li><?php echo $telelefone['telefone']; ?></li>
									<?php endforeach; ?>
                                </ul>
							<?php endif; ?>
                            <?php if($estabelecimento['outras_informacoes']): ?>
                                <div class="entry-content wentry__entry-content store-list__store-infos">
                                    <?php echo $estabelecimento['outras_informacoes'] ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
				<?php endforeach; ?>
            </div>
		<?php endif; ?>
    </div>
</div>
