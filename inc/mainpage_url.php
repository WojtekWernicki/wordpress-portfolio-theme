<?php
/**
 * Get blog posts page URL.
 *
 * Author: Kellen Mace
 * Author URI: https://kellenmace.com/
 * Source: https://kellenmace.com/get-blog-posts-page-url-permalink-wordpress/
 *
 * @return string The blog posts page URL.
 */
function get_blog_posts_page_url() {
	// If front page is set to display a static page, get the URL of the posts page.
	if ( is_front_page() ) {
		return get_page_link( get_option( 'page_on_front' ) );
	}

	return get_permalink( get_option( 'page_for_posts' ) );
}
