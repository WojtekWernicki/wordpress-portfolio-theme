<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="text-center">
            <img src="<?= get_theme_mod( 'misc_404_img', 'Siema!' ) ?>" alt="404 - Page not found" class="img-responsive" id="error-404">
            <h3><a href="<?php get_permalink( get_option( 'page_for_posts' ) ) ?>">Wróć na stronę główną</a></h3>
        </div>
    </div>
</div>

<?php get_footer(); ?>
