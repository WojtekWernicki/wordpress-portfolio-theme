<?php

/**
 * Contains methods for customizing tht theme customization screen.
 *
 * @link http://codex.wordpress.org/Theme_Customization_API
 * @since WordPress Portfolio Theme 0.1.0
 */
class wpt_customization {
    /**
     * This hooks into 'customize_register' (available as of WP 3.4) and allows
     * you to add new sections and controls to the Theme Customize screen.
     *
     * @see add_action('customize_register',$func)
     * @param \WP_Customize_Manager $wp_customize
     * @link http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
     * @since WordPress Portfolio Theme 0.1.0
     */
    public static function register ( $wp_customize ) {
        /**
         * I. Creating sections
         */
        //1. Define Parallax backgrounds section
        $wp_customize->add_section( 'parallax_backgrounds', 
            array(
                'title' => __( 'Parallax Backgrounds', 'wpt' ),
                'priority' => 100,
                'capability' => 'edit_theme_options',
                'description' => __( 'Allows you to change Parallax backgrounds.', 'wpt' ),
            )
        );
        //2. Define Avatar image section
        $wp_customize->add_section( 'avatar_image', 
            array(
                'title' => __( 'Avatar Image', 'wpt' ),
                'priority' => 95,
                'capability' => 'edit_theme_options',
                'description' => __( 'Allows you to change Avatar image.', 'wpt' ),
            )
        );
        //3. Define Social Media links section
        $wp_customize->add_section( 'social_media_links', 
            array(
                'title' => __( 'Social Media Links', 'wpt' ),
                'priority' => 90,
                'capability' => 'edit_theme_options',
                'description' => __( 'Allows you to change Social Media links URL.', 'wpt' ),
            )
        );
        //4. Define Footer  section
        $wp_customize->add_section( 'footer_section', 
            array(
                'title' => __( 'Footer', 'wpt' ),
                'priority' => 85,
                'capability' => 'edit_theme_options',
                'description' => __( 'Allows you to change Footer text.', 'wpt' ),
            )
        );
        
        /**
         * II. Creating settings
         */
        //1. Setting for Parallax in Intro Section
        $wp_customize->add_setting( 'parallax_background_intro',
            array(
                'default' => get_template_directory_uri().'/assets/img/triangle.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //2. Setting for Parallax in Cooperation Section
        $wp_customize->add_setting( 'parallax_background_cooperation',
            array(
                'default' => get_template_directory_uri().'/assets/img/wspolpraca.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //3. Setting for Parallax in Skill Section
        $wp_customize->add_setting( 'parallax_background_skill',
            array(
                'default' => get_template_directory_uri().'/assets/img/computer.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //4. Setting for Facebook URL
        $wp_customize->add_setting( 'social_media_link_fb',
            array(
                'default' => 'https://facebook.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //5. Setting for Twitter URL
        $wp_customize->add_setting( 'social_media_link_tt',
            array(
                'default' => 'https://twitter.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //6. Setting for Instagram URL
        $wp_customize->add_setting( 'social_media_link_ig',
            array(
                'default' => 'https://instagram.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //7. Setting for Google+ URL
        $wp_customize->add_setting( 'social_media_link_gp',
            array(
                'default' => 'https://plus.google.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //8. Setting for LinkedIn URL
        $wp_customize->add_setting( 'social_media_link_in',
            array(
                'default' => 'https://linkedin.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //9. Setting for Snapchat URL
        $wp_customize->add_setting( 'social_media_link_sc',
            array(
                'default' => 'https://snapchat.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //10. Setting for Avatar Image
        $wp_customize->add_setting( 'avatar_image_url',
            array(
                'default' => get_template_directory_uri().'/assets/img/avatar.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //11. Setting for Footer Copyright Text
        $wp_customize->add_setting( 'footer_section_copy',
            array(
                'default' => '&copy; 2017 Wojtek Wernicki',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
        //12. Setting for Footer Cookies Text
        $wp_customize->add_setting( 'footer_section_cookies',
            array(
                'default' => 'Ta strona używa plików cookies do celów statystycznych.',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'refresh',
            )
        );
    }
}

?>