<?php

    $sobre = get_field('sobre_caico');

?>
<section class="section-home about-caico">
    <div class="container">
        <header class="section-home__header">
            <h2 class="section-home__header-title t-green">Sobre Caicó</h2>
        </header>
        <div class="section-home__content">
            <div class="about-caico__content">
                <div class="about-caico__content-text">
                    <?php echo $sobre['texto']; ;?>
                </div>
                <ul class="about-caico__content-buttons list-unstyled">
                    <li><a href="<?php echo $sobre['onde_comer']['url']; ?>"  target="<?php echo $sobre['onde_comer']['target']; ?>"
                           class="btn btn--green about-caico__content-buttons-link"><span class="icon-utensils"></span> <?php echo $sobre['onde_comer']['title'] == '' ? 'Onde Comer' : $sobre['onde_comer']['title']; ?></a></li>
                    <li><a href="<?php echo $sobre['onde_ficar']['url']; ?>"  target="<?php echo $sobre['onde_ficar']['target']; ?>"
                           class="btn btn--green about-caico__content-buttons-link"><span class="icon-bed"></span> <?php echo $sobre['onde_ficar']['title'] == '' ? 'Onde Ficar' : $sobre['onde_ficar']['title']; ?></a></li>
                    <li><a href="<?php echo $sobre['onde_visitar']['url']; ?>"  target="<?php echo $sobre['onde_visitar']['target']; ?>"
                           class="btn btn--green about-caico__content-buttons-link"><span class="icon-map-marker-alt"></span> <?php echo $sobre['onde_visitar']['title'] == '' ? 'Onde Visitar' : $sobre['onde_visitar']['title']; ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>