<?php get_header(); ?>
    <div class="section" id="top">
        <div class="parallax">
            <img src="<?= get_theme_mod( 'fp_top_avatar', get_template_directory_uri().'/assets/img/avatar.jpg' ) ?>" alt="Avatar">
            <h1 class="text-center"><?= get_theme_mod( 'fp_top_header', 'Siema!' ) ?> <br>
                <small><?= get_theme_mod( 'fp_top_header_small', 'Jestem Wojtek, web developer' ) ?></small>
            </h1>
        </div>
    </div>
    <div class="section" id="o-mnie">
        <div class="container">
            <div class="row">
                <h2 class="text-center"><?= get_theme_mod( 'fp_about_header' ) ?></h2>
                <div class="center-ver" id="column-content">
                    <div class="col-xs-12 col-md-6">
                        <div class="text-center">
                            <?= get_theme_mod( 'fp_about_about_textarea' ) ?>
                        </div>
                        <h3 class="text-center"><?= get_theme_mod( 'fp_about_subheader_work' ) ?></h3>
                        <?= get_theme_mod( 'fp_about_work_textarea' ) ?>
                        <h3 class="text-center"><?= get_theme_mod( 'fp_about_subheader_edu' ) ?></h3>
                        <?= get_theme_mod( 'fp_about_edu_textarea' ) ?>
                    </div>
                    <div class="col-xs-12 col-md-6 text-center">
                        <h3><?= get_theme_mod( 'fp_about_subheader_more' ) ?></h3>

                        <div class="flexbox-container">
                            <a href="<?= get_theme_mod( 'fp_contact_sm_in', 'https://linkedin.com/' ); ?>" target="_blank">
                                <i class="fa fa-linkedin fa-5x"></i>
                                <small>LinkedIn</small>
                            </a>
                            <a href="<?= get_theme_mod( 'fp_about_more_bloglink' ) ?>">
                                <i class="fa fa-desktop fa-5x"></i>
                                <small>Blog</small>
                            </a>

                            <a href="#wspolpraca">
                                <i class="fa fa-question fa-5x"></i>
                                <small>Zobacz więcej</small>
                            </a>
                        </div>

                        <h3>Pliki do pobrania:</h3>
                        <a href="<?= get_theme_mod( 'fp_about_download_file' ) ?>" class="btn btn-primary btn-lg" role="button"><i class="fa fa-download fa-fw"></i> Pobierz CV</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="wspolpraca">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="blue-frame text-center">
                        <h2><?= get_theme_mod( 'fp_cooperation_header' ) ?></h2>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa <?= get_theme_mod( 'fp_cooperation_icon_1' ) ?> fa-5x"></i>
                            <h3>
                                <?= get_theme_mod( 'fp_cooperation_subheader_1' ) ?> <br>
                                <small><?= get_theme_mod( 'fp_cooperation_subheader_small_1' ) ?></small>
                            </h3>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa <?= get_theme_mod( 'fp_cooperation_icon_2' ) ?> fa-5x"></i>
                            <h3>
                                <?= get_theme_mod( 'fp_cooperation_subheader_2' ) ?> <br>
                                <small><?= get_theme_mod( 'fp_cooperation_subheader_small_2' ) ?></small>
                            </h3>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa <?= get_theme_mod( 'fp_cooperation_icon_3' ) ?> fa-5x"></i>
                            <h3>
                                <?= get_theme_mod( 'fp_cooperation_subheader_3' ) ?> <br>
                                <small><?= get_theme_mod( 'fp_cooperation_subheader_small_3' ) ?></small>
                            </h3>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3">
                            <i class="fa <?= get_theme_mod( 'fp_cooperation_icon_4' ) ?> fa-5x"></i>
                            <h3>
                                <?= get_theme_mod( 'fp_cooperation_subheader_4' ) ?> <br>
                                <small><?= get_theme_mod( 'fp_cooperation_subheader_small_4' ) ?></small>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="portfolio">
        <div class="parallax">
            <div class="col-xs-12">
                <h2 class="text-center"><?= get_theme_mod( 'fp_portfolio_header' ) ?></h2>
            </div>
            <div class="container">
                <div class="row">
                    <?php

                    $query = new WP_Query( array( 'category_name' => 'portfolio' ) );
                    if( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post(); ?>

                            <div class="col-xs-12 col-sm-6 col-md-4">
                                <div class="portfolio-item">
                                    <a href="#" data-toggle="modal" data-target="#<?= get_the_ID() ?>">
                                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php get_post_meta( $image->id, '_wp_attachment_image_alt', true) ?>">
                                        <h3 class="text-center"><?php the_title(); ?></h3>
                                    </a>
                                </div>
                            </div>

                            <?php
                        }
                        wp_reset_postdata();
                    } else {
                        echo '<p class="lead text-center">
                            Nie znaleziono żadnych wpisów do portfolio :(
                        </p>';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="skill">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 blue-frame">
                        <h2 class="text-center"><?= get_theme_mod( 'fp_skills_header' ) ?></h2>
                        <div class="col-xs-12 col-md-6 text-center">
                            <h3><?= get_theme_mod( 'fp_skillsskills_subheader_1' ) ?></h3>
                            <?= get_theme_mod( 'fp_skills_textarea_1' ) ?>

                            <h3><?= get_theme_mod( 'fp_skills_subheader_2' ) ?></h3>
                            <?= get_theme_mod( 'fp_skills_textarea_1' ) ?>
                        </div>
                        <div class="col-xs-12 col-md-6 text-center">
                            <h3><?= get_theme_mod( 'fp_skills_subheader_3' ) ?></h3>
                            <?= get_theme_mod( 'fp_skills_textarea_3' ) ?>
                        </div>
                        <div class="col-xs-12">
                            <h3 class="text-center"><?= get_theme_mod( 'fp_skills_subheader_4' ) ?></h3>
                            <div class="flexbox-container" id="languages">
                                <?= get_theme_mod( 'fp_skills_textarea_4' ) ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="kontakt">
        <div class="parallax">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="text-center"><?= get_theme_mod( 'fp_contact_header' ) ?></h2>
                    </div>
                    <div class="col-xs-12 center-ver">
                        <div class="col-xs-12 col-md-6">
                            <h3 class="text-center"><?= get_theme_mod( 'fp_contact_subheader_1' ) ?></h3>
                            <div class="text-center" id="messages">
                                <div class="message" id="error">Coś się popsuło… Spróbuj wysłać wiadomość jeszcze raz.</div>
                                <div class="message" id="success">Wiadomość wysłana pomyślnie!</div>
                            </div>
                            <form action="sendmail.php" method="post">
                                <label for="first-name">Imię</label>
                                <input type="text" name="first-name" id="first-name" placeholder="Imię">
                                <label for="mail">E-mail</label>
                                <input type="email" name="mail" id="mail" placeholder="E-mail">
                                <label for="subject">Temat</label>
                                <input type="text" name="subject" id="subject" placeholder="Temat">
                                <label for="message">Wiadomość</label>
                                <textarea name="message" id="message" placeholder="Wiadomość"></textarea>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" id="submit">
                                        <i class="fa fa-paper-plane fa-fw"></i> Wyślij wiadomość
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-xs-12 col-md-6 text-center">
                            <h3><?= get_theme_mod( 'fp_contact_subheader_2' ) ?></h3>
                            <div class="flexbox-container">
                                <a href="<?= get_theme_mod( 'fp_contact_sm_fb', 'https://facebook.com/' ); ?>" target="_blank">
                                    <i class="fa fa-facebook fa-5x"></i>
                                    <small>Facebook</small>
                                </a>
                                <a href="<?= get_theme_mod( 'fp_contact_sm_tt', 'https://twitter.com/' ); ?>" target="_blank">
                                    <i class="fa fa-twitter fa-5x"></i>
                                    <small>Twitter</small>
                                </a>
                                <a href="<?= get_theme_mod( 'fp_contact_sm_ig', 'https://instagram.com/' ); ?>" target="_blank">
                                    <i class="fa fa-instagram fa-5x"></i>
                                    <small>Instagram</small>
                                </a>
                                <a href="<?= get_theme_mod( 'fp_contact_sm_gp', 'https://plus.google.com/' ); ?>" target="_blank">
                                    <i class="fa fa-google-plus fa-5x"></i>
                                    <small>Google+</small>
                                </a>
                                <a href="<?= get_theme_mod( 'fp_contact_sm_in', 'https://linkedin.com/' ); ?>" target="_blank">
                                    <i class="fa fa-linkedin fa-5x"></i>
                                    <small>LinkedIn</small>
                                </a>
                                <a href="<?= get_theme_mod( 'fp_contact_sm_sc', 'https://snapchat.com/' ); ?>" target="_blank">
                                    <i class="fa fa-snapchat fa-5x"></i>
                                    <small>Snapchat</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div id="copy">
                <?= get_theme_mod( 'footer_copy', '&copy; 2017 Wojtek Wernicki' ); ?>
            </div>
            <div id="cookies"><?= get_theme_mod( 'footer_cookies', 'Ta strona używa plików cookies do celów statystycznych.' ) ?></div>
        </footer>
    </div>

    <?php

    $query = new WP_Query( array( 'category_name' => 'portfolio' ) );
    if( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();

            $project_url = get_post_custom_values('project_url', get_the_ID());
            $project_icon = get_post_custom_values('project_icon', get_the_ID());
            $project_storage = get_post_custom_values('project_storage', get_the_ID());

            ?>

            <div class="modal fade portfolio-modal" id="<?= get_the_ID() ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <button type="button" class="modal-close" data-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times fa-5x" aria-hidden="false"></i>
                        </button>
                        <div class="container">
                            <div class="row">
                                <h2 class="text-center"><?php the_title(); ?></h2>

                                <img src="" alt="<?php get_post_meta( $image->id, '_wp_attachment_image_alt', true) ?>" class="img-responsive lazy-load" data-src="<?= get_the_post_thumbnail_url() ?>">

                                <div class="text-center">
                                    <?php the_content(); ?>
                                </div>

                                <div class="text-center buttons">
                                    <a href="<?= $project_url[0]; ?>" target="_blank" class="btn btn-primary" role="button">
                                        <i class="fa <?= $project_icon[0]; ?> fa-fw"></i> <?= $project_storage[0]; ?>
                                    </a>
                                    <button type="button" class="btn btn-default" data-dismiss="modal">
                                        <i class="fa fa-close fa-fw"></i> Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
        }
        wp_reset_postdata();
    }

    ?>

<?php get_footer(); ?>
