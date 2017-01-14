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
        $wp_customize->add_section( 'fp_top',
        array(
             'title' => __( 'Top Section', 'wpt' ),
             'priority' => 30,
             'capability' => 'edit_theme_options',
            )
        );
        $wp_customize->add_section( 'fp_about',
        array(
             'title' => __( 'About Me Section', 'wpt' ),
             'priority' => 35,
             'capability' => 'edit_theme_options',
            )
        );
        $wp_customize->add_section( 'fp_cooperation',
        array(
             'title' => __( 'Cooperation Section', 'wpt' ),
             'priority' => 40,
             'capability' => 'edit_theme_options',
            )
        );
        $wp_customize->add_section( 'fp_portfolio',
        array(
             'title' => __( 'Portfolio Section', 'wpt' ),
             'priority' => 45,
             'capability' => 'edit_theme_options',
            )
        );
        $wp_customize->add_section( 'fp_skills',
        array(
             'title' => __( 'Skills Section', 'wpt' ),
             'priority' => 50,
             'capability' => 'edit_theme_options',
            )
        );
        $wp_customize->add_section( 'fp_contact',
        array(
             'title' => __( 'Contact Section', 'wpt' ),
             'priority' => 55,
             'capability' => 'edit_theme_options',
            )
        );

        /**
         * II. Creating settings
         */
        /* fp_top (Top Section) */
        $wp_customize->add_setting( 'fp_top_avatar',
        array(
             'default' => get_template_directory_uri().'/assets/img/avatar.jpg',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_top_header',
        array(
             'default' => 'Siema!',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_top_header_small',
        array(
             'default' => 'Jestem Wojtek, web developer',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        /* fp_about (About Me Section) */
        $wp_customize->add_setting( 'fp_about_header',
        array(
             'default' => 'O mnie',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_about_subheader_work',
        array(
             'default' => 'Doświadczenie zawodowe',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_about_subheader_edu',
        array(
             'default' => 'Edukacja',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_about_subheader_more',
        array(
             'default' => 'Więcej informacji o mnie',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_about_subheader_download',
        array(
             'default' => 'Pliki do pobrania:',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_about_about_textarea',
        array(
             'default' => '',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_about_work_textarea',
        array(
             'default' => '',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );

        /**
         * III. Creating controls
         */
        /* fp_top (Top Section) */
        $wp_customize->add_control( new WP_Customize_Image_Control()
            $wp_customize,
            'fp_top_control_avatar',
            array(
                'label' => __( 'Avatar Image', 'wpt' ),
                'section' => 'fp_top',
                'settings' => 'fp_top_avatar',
                'priority' => 30
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_top_control_header',
            array(
                'label' => __( 'Header Text', 'wpt' ),
                'section' => 'fp_top',
                'settings' => 'fp_top_header',
                'type' => 'text',
                'priority' => 35
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_top_control_header_small',
            array(
                'label' => __( 'Header Small Text', 'wpt' ),
                'section' => 'fp_top',
                'settings' => 'fp_top_header_small',
                'type' => 'text',
                'priority' => 40
            )
        );
        /* fp_about (About Me Section) */
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_about_control_header',
            array(
                'label' => __( 'Header Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_header',
                'type' => 'text',
                'priority' => 30
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_about_control_about_textarea',
            array(
                'label' => __( 'About Me Textarea', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_about_textarea',
                'type' => 'textarea',
                'priority' => 35
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_about_control_subheader_work',
            array(
                'label' => __( 'Subheader Work Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_work',
                'type' => 'text',
                'priority' => 40,
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_about_control_work_textarea',
            array(
                'label' => __( 'Work Textarea', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_work_textarea',
                'type' => 'textarea',
                'priority' => 45
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_about_control_subheader_edu',
            array(
                'label' => __( 'Subheader Education Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_edu',
                'type' => 'text',
                'priority' => 40,
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_about_control_subheader_more',
            array(
                'label' => __( 'Subheader More Info Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_work',
                'type' => 'text',
                'priority' => 45,
            )
        );
        $wp_customize->add_control( new WP_Customize_Control()
            $wp_customize,
            'fp_about_control_subheader_download',
            array(
                'label' => __( 'Subheader Download Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_download',
                'type' => 'text',
                'priority' => 50,
            )
        );

    }
}

?>
