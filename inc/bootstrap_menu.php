<?php

/**
 * Author: Stefano (@ragequit)
 * Author URI: https://profiles.wordpress.org/ragequit/
 * Source: https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/#comment-1609
 */

require_once('mainpage_url.php');

function create_bootstrap_menu( $theme_location ) {
    if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {

        $nav_class = '';

        if( is_front_page() ) {
            $nav_class = 'navbar navbar-default navbar-fixed-top';
        } else {
            $nav_class = 'navbar navbar-default';
        }

        $menu_list  = '<nav class="' . $nav_class . '">' ."\n";
        $menu_list .= '<div class="container-fluid">' ."\n";
        $menu_list .= '<div class="navbar-header">' ."\n";
        $menu_list .= '<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigate" aria-expanded="false">' ."\n";
        $menu_list .= '<span class="sr-only">Toggle navigation</span>' ."\n";
        $menu_list .= '<span class="icon-bar"></span>' ."\n";
        $menu_list .= '<span class="icon-bar"></span>' ."\n";
        $menu_list .= '<span class="icon-bar"></span>' ."\n";
        $menu_list .= '</button>' ."\n";
        $menu_list .= '<a class="navbar-brand" href="' . get_blog_posts_page_url() . '">' . get_bloginfo( 'name' ) . '</a>';
        $menu_list .= '</div>' ."\n";

        $menu = get_term( $locations[$theme_location], 'nav_menu' );
        $menu_items = wp_get_nav_menu_items($menu->term_id);

        $menu_list .= '<div class="collapse navbar-collapse" id="navigate">' ."\n";
        $menu_list .= '<ul class="nav navbar-nav navbar-right">' ."\n";

        foreach( $menu_items as $menu_item ) {
            if( $menu_item->menu_item_parent == 0 ) {

                $parent = $menu_item->ID;

                $menu_array = array();
                foreach( $menu_items as $submenu ) {
                    if( $submenu->menu_item_parent == $parent ) {
                        $bool = true;
                        $menu_array[] = '<li><a href="' . $submenu->url . '">' . $submenu->title . '</a></li>' ."\n";
                    }
                }
                if( $bool == true && count( $menu_array ) > 0 ) {

                    $menu_list .= '<li class="dropdown">' ."\n";
                    $menu_list .= '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">' . $menu_item->title . ' <span class="caret"></span></a>' ."\n";

                    $menu_list .= '<ul class="dropdown-menu">' ."\n";
                    $menu_list .= implode( "\n", $menu_array );
                    $menu_list .= '</ul>' ."\n";

                } else {

                    $menu_list .= '<li>' ."\n";
                    $menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>' ."\n";
                }

            }

            // end <li>
            $menu_list .= '</li>' ."\n";
        }

        $menu_list .= '</ul>' ."\n";
        $menu_list .= '</div>' ."\n";
        $menu_list .= '</div>' ."\n";
        $menu_list .= '</nav>' ."\n";

    } else {
        $menu_list = '<!-- no menu defined in location "'.$theme_location.'" -->';
    }

    echo $menu_list;
}

?>
