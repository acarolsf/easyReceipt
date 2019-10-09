<?php
    $links = get_field('links', 'option');
?>
<footer class="content-info">
    <div class="content-info__app">
        <h2 class="content-info__app-title t-pink">Faça o download agora!</h2>
        <p class="content-info__app-description">Baixe agora mesmo o aplicativo Carnaval de Caicó pela <br />
            Play Store ou Apple Store</p>
        <div class="content-info__app-badges">
            <?php if(is_array($links['play_store'])): ?>
            <a href="<?php echo $links['play_store']['url']; ?>" rel="external">
                <img src="<?php echo images('badge-gplay.png'); ?>" width="180" alt="">
            </a>
            <?php endif; ?>
	        <?php if(is_array($links['apple_store'])): ?>
            <a href="<?php echo $links['apple_store']['url']; ?>" rel="external">
                <img src="<?php echo images('badge-apple.svg'); ?>" width="180" alt="">
            </a>
	        <?php endif; ?>
        </div>
    </div>
    <div class="content-info__copy text-center">
        <p>
            Copyright <?php echo date( 'Y' ); ?> - Carnaval de Caicó
        </p>
    </div>
</footer>
