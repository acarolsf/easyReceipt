<?php
$vitrine = get_field('vitrine');

if(!$vitrine){
    return;
}
?>
<section class="showcase">
    <div class="showcase__slide">
        <div class="showcase__slide-items">
            <?php foreach ($vitrine as $item): ?>
                <div class="showcase__slide-item">
                    <div class="showcase__slide-item-image">
                        <img src="<?php echo $item['imagem']['url']; ?>" alt="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="showcase__slide-controls">
            <div class="showcase__slide-controls-btn showcase__slide-controls-btn--prev"></div>
            <div class="showcase__slide-controls-btn showcase__slide-controls-btn--next"></div>
        </div>
        <div class="showcase__slide-pager"></div>
    </div>
</section>