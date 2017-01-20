<?php get_header(); ?>
    <div class="page-header text-center">
        <h1>
            <?php single_cat_title( '' ); ?>
        </h1>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <section class="portfolio-container text-center">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php get_post_meta( $image->id, '_wp_attachment_image_alt', true) ?>" class="img-responsive">
                        <h2 class="text-center">
                            <?php the_title(); ?>
                        </h2>
                        <a href="<?= get_permalink() ?>" class="btn btn-primary">Zobacz więcej</a>
                    </article>
                    <?php endwhile; else : ?>
    	                <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                    <?php endif; ?>
                </section>
                <nav>
                    <ul class="pager">
                        <li class="previous"><?php next_posts_link( 'Następna strona' ); ?></li>
                        <li class="next"><?php previous_posts_link( 'Poprzednia strona' ); ?></li>
                    </ul>
                </nav>
            </div>
            <div class="col-xs-12 col-md-3">
                <?php if ( dynamic_sidebar('blog-widget') ) : else : endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
