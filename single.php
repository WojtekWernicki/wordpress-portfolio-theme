<?php get_header(); ?>
    <div class="page-header image-header">
        <img src="<?= get_the_post_thumbnail_url() ?>" alt="" class="img-responsive">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-9">
                <section>
                    <article>
                        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <h1 class="text-center">
                                <?php the_title(); ?> <br>
                                <small><?php the_time( 'j F Y' ) ?> | <?php the_category( ' ' ) ?></small>
                            </h1>

                            <?php the_content(); ?>

                        <?php endwhile; else : ?>
                            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>
                    </article>
                </section>
            </div>
            <div class="col-xs-12 col-md-3">
                <?php if ( dynamic_sidebar('blog-widget') ) : else : endif; ?>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
