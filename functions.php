<?php

require_once('inc/bootstrap_menu.php');
require_once('inc/theme_customization.php');

add_theme_support('post-thumbnails');

function register_wpt_menus() {
    register_nav_menus(
        array('frontpage_menu' => __('Front Page Menu'),
             'blog_menu' => __('Blog Menu'))
    );
}

function register_wpt_widgets() {
    register_sidebar(array(
        'id' => 'blog-widget',
        'name' => 'Blog Widget',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

add_action('init', 'register_wpt_menus');
add_action('widgets_init', 'register_wpt_widgets');

?>