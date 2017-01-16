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
        $wp_customize->add_setting( 'fp_top_background',
        array(
             'default' => get_template_directory_uri().'/assets/img/triangle.jpg',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
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
        $wp_customize->add_setting( 'fp_about_more_bloglink',
        array(
             'default' => '/blog',
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
        $wp_customize->add_setting( 'fp_about_download_file',
        array(
             'default' => '',
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
        $wp_customize->add_setting( 'fp_about_edu_textarea',
        array(
             'default' => '',
             'type' => 'theme_mod',
             'capability' => 'edit_theme_options',
             'transport' => 'postMessage',
            )
        );
        /* fp_cooperation (Cooperation Section) */
        $wp_customize->add_setting( 'fp_cooperation_background',
        array(
            'default' => get_template_directory_uri().'/assets/img/wspolpraca.jpg',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_header',
        array(
            'default' => 'Dlaczego warto ze mną współpracować?',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_1',
        array(
            'default' => 'Najnowsze standardy',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_2',
        array(
            'default' => 'Komunikatywność',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_3',
        array(
            'default' => 'Doświadczenie',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_4',
        array(
            'default' => 'Zaangażowanie',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_small_1',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_small_2',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_small_3',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_subheader_small_4',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_icon_1',
        array(
            'default' => 'fa-html5',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_icon_2',
        array(
            'default' => 'fa-comments',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_icon_3',
        array(
            'default' => 'fa-briefcase',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );
        $wp_customize->add_setting( 'fp_cooperation_icon_4',
        array(
            'default' => 'fa-heart',
            'type' => 'theme_mod',
            'capability' => 'edit_theme_options',
            'transport' => 'postMessage',
            )
        );


        /**
         * III. Creating controls
         */
        /* fp_top (Top Section) */
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'fp_top_control_background',
            array(
                'label' => __( 'Top Background', 'wpt' ),
                'section' => 'fp_top',
                'settings' => 'fp_top_background',
                'priority' => 30,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'fp_top_control_avatar',
            array(
                'label' => __( 'Avatar Image', 'wpt' ),
                'section' => 'fp_top',
                'settings' => 'fp_top_avatar',
                'priority' => 35,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_top_control_header',
            array(
                'label' => __( 'Header Text', 'wpt' ),
                'section' => 'fp_top',
                'settings' => 'fp_top_header',
                'type' => 'text',
                'priority' => 40,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_top_control_header_small',
            array(
                'label' => __( 'Header Small Text', 'wpt' ),
                'section' => 'fp_top',
                'settings' => 'fp_top_header_small',
                'type' => 'text',
                'priority' => 45,
                )
            )
        );
        /* fp_about (About Me Section) */
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_header',
            array(
                'label' => __( 'Header Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_header',
                'type' => 'text',
                'priority' => 30,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_about_textarea',
            array(
                'label' => __( 'About Me Textarea', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_about_textarea',
                'type' => 'textarea',
                'priority' => 35,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_subheader_work',
            array(
                'label' => __( 'Subheader Work Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_work',
                'type' => 'text',
                'priority' => 40,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_work_textarea',
            array(
                'label' => __( 'Work Textarea', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_work_textarea',
                'type' => 'textarea',
                'priority' => 45,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_subheader_edu',
            array(
                'label' => __( 'Subheader Education Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_edu',
                'type' => 'text',
                'priority' => 50,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_edu_textarea',
            array(
                'label' => __( 'Education Textarea', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_edu_textarea',
                'type' => 'textarea',
                'priority' => 55,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_subheader_more',
            array(
                'label' => __( 'Subheader More Info Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_more',
                'type' => 'text',
                'priority' => 60,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_more_bloglink',
            array(
                'label' => __( 'More Info Bloglink', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_more_bloglink',
                'type' => 'text',
                'priority' => 65,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_about_control_subheader_download',
            array(
                'label' => __( 'Subheader Download Text', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_subheader_download',
                'type' => 'text',
                'priority' => 70,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Upload_Control(
            $wp_customize,
            'fp_about_control_download_file',
            array(
                'label' => __( 'Download File', 'wpt' ),
                'section' => 'fp_about',
                'settings' => 'fp_about_download_file',
                'priority' => 75,
                )
            )
        );
        /* fp_cooperation (Cooperation Section) */
        $wp_customize->add_control( new WP_Customize_Image_Control(
            $wp_customize,
            'fp_cooperation_control_background',
            array(
                'label' => __( 'Cooperation Background', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_background',
                'priority' => 30,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_header',
            array(
                'label' => __( 'Cooperation Header Text', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_header',
                'type' => 'text',
                'priority' => 35,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_1',
            array(
                'label' => __( 'Cooperation Subheader Text 1', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_1',
                'type' => 'text',
                'priority' => 40,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_2',
            array(
                'label' => __( 'Cooperation Subheader Text 2', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_2',
                'type' => 'text',
                'priority' => 45,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_3',
            array(
                'label' => __( 'Cooperation Subheader Text 3', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_3',
                'type' => 'text',
                'priority' => 50,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_4',
            array(
                'label' => __( 'Cooperation Subheader Text 4', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_4',
                'type' => 'text',
                'priority' => 55,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_small_1',
            array(
                'label' => __( 'Cooperation Subheader Small 1', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_small_1',
                'type' => 'textarea',
                'priority' => 60,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_small_2',
            array(
                'label' => __( 'Cooperation Subheader Small 2', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_small_2',
                'type' => 'textarea',
                'priority' => 65,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_small_3',
            array(
                'label' => __( 'Cooperation Subheader Small 3', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_small_3',
                'type' => 'textarea',
                'priority' => 70,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_subheader_small_4',
            array(
                'label' => __( 'Cooperation Subheader Small 4', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_subheader_small_4',
                'type' => 'textarea',
                'priority' => 75,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_icon_1',
            array(
                'label' => __( 'Cooperation Icon 1', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_icon_1',
                'type' => 'text',
                'priority' => 80,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_icon_2',
            array(
                'label' => __( 'Cooperation Icon 2', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_icon_2',
                'type' => 'text',
                'priority' => 85,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_icon_3',
            array(
                'label' => __( 'Cooperation Icon 3', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_icon_3',
                'type' => 'text',
                'priority' => 90,
                )
            )
        );
        $wp_customize->add_control( new WP_Customize_Control(
            $wp_customize,
            'fp_cooperation_control_icon_4',
            array(
                'label' => __( 'Cooperation Icon 4', 'wpt' ),
                'section' => 'fp_cooperation',
                'settings' => 'fp_cooperation_icon_4',
                'type' => 'text',
                'priority' => 95,
                )
            )
        );

    }
}

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'wpt_customization' , 'register' ) );

// Output custom CSS to live site
#add_action( 'wp_head' , array( 'wpt_customization', 'header_output' ) );

?>
