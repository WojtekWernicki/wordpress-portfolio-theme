    <?php if( !is_front_page() ) { ?>
    <footer>
        <div id="copy">
            <?= get_theme_mod( 'footer_copy', '&copy; 2017 Wojtek Wernicki' ); ?>
        </div>
        <div id="cookies"><?= get_theme_mod( 'footer_cookies', 'Ta strona używa plików cookies do celów statystycznych.' ) ?></div>
    </footer>
    <?php } ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/js/script.min.js"></script>
    <?php wp_footer(); ?>
</body>
</html>
