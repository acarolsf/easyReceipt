<?php
$posts = get_news_highlights(3, 'noticias');

if(!$posts){
	return;
}
?>
<section class="section-home news-home section-home--p0">
    <div class="container">
        <header class="section-home__header">
            <h2 class="section-home__header-title t-orange">Notícias</h2>
            <a href="<?php echo home_url('/noticias/'); ?>" class="section-home__header-see-more t-orange">Ver mais »</a>
        </header>
        <div class="section-home__content">
            <div class="main-content__archive-list">
	            <?php
	            foreach ($posts as $post):
		            setup_postdata($post);
		            get_template_part('templates/content');
	            endforeach;
	            wp_reset_postdata();
	            ?>
            </div>
        </div>
    </div>
</section>