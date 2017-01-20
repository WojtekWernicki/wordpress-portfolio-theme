<?php

require_once('inc/bootstrap_menu.php');
require_once('inc/theme_custom.php');
#require_once('inc/theme_customization.php');

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 1920, 600 );

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

function add_image_class($class){
    $class .= ' img-responsive';
    return $class;
}
add_filter('get_image_tag_class','add_image_class');

function exclude_category_home( $query ) {
    if ( $query->is_home ) {
        $excluded_cat = get_cat_ID( 'portfolio' );
        $query->set( 'cat', '-' . $excluded_cat . '' );
    }
    return $query;
}

add_filter( 'pre_get_posts', 'exclude_category_home' );

add_action('init', 'register_wpt_menus');
add_action('widgets_init', 'register_wpt_widgets');

?>
