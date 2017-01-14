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
                'priority' => 30,
                'capability' => 'edit_theme_options',
                'description' => __( 'Allows you to change Parallax backgrounds.', 'wpt' ),
            )
        );
        //2. Define Avatar image section
        $wp_customize->add_section( 'avatar_image',
            array(
                'title' => __( 'Avatar Image', 'wpt' ),
                'priority' => 35,
                'capability' => 'edit_theme_options',
                'description' => __( 'Allows you to change Avatar image.', 'wpt' ),
            )
        );
        //3. Define Social Media links section
        $wp_customize->add_section( 'social_media_links',
            array(
                'title' => __( 'Social Media Links', 'wpt' ),
                'priority' => 40,
                'capability' => 'edit_theme_options',
                'description' => __( 'Allows you to change Social Media links URL.', 'wpt' ),
            )
        );
        //4. Define Footer  section
        $wp_customize->add_section( 'footer_section',
            array(
                'title' => __( 'Footer', 'wpt' ),
                'priority' => 45,
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
                'transport' => 'postMessage',
            )
        );
        //2. Setting for Parallax in Cooperation Section
        $wp_customize->add_setting( 'parallax_background_cooperation',
            array(
                'default' => get_template_directory_uri().'/assets/img/wspolpraca.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //3. Setting for Parallax in Skill Section
        $wp_customize->add_setting( 'parallax_background_skill',
            array(
                'default' => get_template_directory_uri().'/assets/img/computer.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //4. Setting for Facebook URL
        $wp_customize->add_setting( 'social_media_link_fb',
            array(
                'default' => 'https://facebook.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //5. Setting for Twitter URL
        $wp_customize->add_setting( 'social_media_link_tt',
            array(
                'default' => 'https://twitter.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //6. Setting for Instagram URL
        $wp_customize->add_setting( 'social_media_link_ig',
            array(
                'default' => 'https://instagram.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //7. Setting for Google+ URL
        $wp_customize->add_setting( 'social_media_link_gp',
            array(
                'default' => 'https://plus.google.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //8. Setting for LinkedIn URL
        $wp_customize->add_setting( 'social_media_link_in',
            array(
                'default' => 'https://linkedin.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //9. Setting for Snapchat URL
        $wp_customize->add_setting( 'social_media_link_sc',
            array(
                'default' => 'https://snapchat.com/',
                'type' => 'option',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //10. Setting for Avatar Image
        $wp_customize->add_setting( 'avatar_image_url',
            array(
                'default' => get_template_directory_uri().'/assets/img/avatar.jpg',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //11. Setting for Footer Copyright Text
        $wp_customize->add_setting( 'footer_section_copy',
            array(
                'default' => '&copy; 2017 Wojtek Wernicki',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );
        //12. Setting for Footer Cookies Text
        $wp_customize->add_setting( 'footer_section_cookies',
            array(
                'default' => 'Ta strona używa plików cookies do celów statystycznych.',
                'type' => 'theme_mod',
                'capability' => 'edit_theme_options',
                'transport' => 'postMessage',
            )
        );

        /**
         * III. Creating controls
         */
        //1. Control for Parallax in Intro Section
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'wpt_parallax_bg_intro',
            array(
                'label' => __( 'Parallax Intro Section Background', 'wpt' ),
                'section' => 'parallax_backgrounds',
                'settings' => 'parallax_background_intro',
                'priority' => 30,
                )
            )
        );
        //2. Control for Parallax in Cooperation Section
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'wpt_parallax_bg_cooperation',
            array(
                'label' => __( 'Parallax Cooperation Section Background', 'wpt' ),
                'section' => 'parallax_backgrounds',
                'settings' => 'parallax_background_cooperation',
                'priority' => 35,
                )
            )
        );
        //3. Control for Parallax in Skill Section
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'wpt_parallax_bg_skill',
            array(
                'label' => __( 'Parallax Skill Section Background', 'wpt' ),
                'section' => 'parallax_backgrounds',
                'settings' => 'parallax_background_skill',
                'priority' => 40,
                )
            )
        );
        //4. Control for Facebook URL
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_sm_link_fb',
            array(
                'label' => __( 'Facebook Link URL', 'wpt' ),
                'section' => 'social_media_links',
                'settings' => 'social_media_link_fb',
                'type' => 'text',
                'priority' => 30,
                )
            )
        );
        //5. Control for Twitter URL
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_sm_link_tt',
            array(
                'label' => __( 'Twitter Link URL', 'wpt' ),
                'section' => 'social_media_links',
                'settings' => 'social_media_link_tt',
                'type' => 'text',
                'priority' => 35,
                )
            )
        );
        //6. Control for Instagram URL
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_sm_link_ig',
            array(
                'label' => __( 'Instagram Link URL', 'wpt' ),
                'section' => 'social_media_links',
                'settings' => 'social_media_link_ig',
                'type' => 'text',
                'priority' => 40,
                )
            )
        );
        //7. Control for Instagram URL
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_sm_link_gp',
            array(
                'label' => __( 'Google+ Link URL', 'wpt' ),
                'section' => 'social_media_links',
                'settings' => 'social_media_link_gp',
                'type' => 'text',
                'priority' => 45,
                )
            )
        );
        //8. Control for LinkedIn URL
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_sm_link_in',
            array(
                'label' => __( 'LinkedIn Link URL', 'wpt' ),
                'section' => 'social_media_links',
                'settings' => 'social_media_link_in',
                'type' => 'text',
                'priority' => 50,
                )
            )
        );
        //9. Control for Snapchat URL
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_sm_link_sc',
            array(
                'label' => __( 'Snapchat Link URL', 'wpt' ),
                'section' => 'social_media_links',
                'settings' => 'social_media_link_sc',
                'type' => 'text',
                'priority' => 55,
                )
            )
        );
        //10. Control for Avatar Image
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'wpt_avatar_image_url',
            array(
                'label' => __( 'Avatar Image', 'wpt' ),
                'section' => 'avatar_image',
                'settings' => 'avatar_image_url',
                'priority' => 30,
                )
            )
        );
        //11. Control for Footer Copyright Text
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_footer_copy',
            array(
                'label' => __( 'Footer Copyright Text', 'wpt' ),
                'section' => 'footer_section',
                'settings' => 'footer_section_copy',
                'type' => 'text',
                'priority' => 30,
                )
            )
        );
        //12. Control for Footer Cookies Text
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'wpt_footer_cookies',
            array(
                'label' => __( 'Footer Cookies Text', 'wpt' ),
                'section' => 'footer_section',
                'settings' => 'footer_section_cookies',
                'type' => 'text',
                'priority' => 35,
                )
            )
        );
    }
    /**
     * This will output the custom WordPress settings to the live theme's WP head.
     *
     * Used by hook: 'wp_head'
     *
     * @see add_action('wp_head',$func)
     * @since WordPress Portfolio Theme 0.1.0
     */
    function header_output() {
    ?>
    <!--Customizer CSS-->
    <style type="text/css">
        #top .parallax { background-image: url('<?php echo get_theme_mod( 'parallax_background_intro', get_template_directory_uri().'/assets/img/triangle.jpg' ); ?>'); }
        #wspolpraca .parallax { background-image: url('<?php echo get_theme_mod( 'parallax_background_cooperation', get_template_directory_uri().'/assets/img/wspolpraca.jpg' ); ?>'); }
        #skill .parallax { background-image: url('<?php echo get_theme_mod( 'parallax_background_skill', get_template_directory_uri().'/assets/img/computer.jpg' ); ?>'); }
    </style>
    <!--/Customizer CSS-->
    <?php
    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'wpt_customization' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'wpt_customization', 'header_output' ) );

?>
