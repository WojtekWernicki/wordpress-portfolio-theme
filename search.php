<?php get_header(); ?>
    <div class="page-header text-center">
        <h1>
            <?= $wp_query->found_posts; ?>
            <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"
        </h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <section>
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <article>
                        <img src="<?= get_the_post_thumbnail_url() ?>" alt="<?php get_post_meta( $image->id, '_wp_attachment_image_alt', true) ?>" class="img-responsive">
                        <h2 class="text-center">
                            <a href="<?= get_permalink() ?>"><?php the_title(); ?></a> <br>
                            <small><?php the_time( 'j F Y' ) ?> | <?php the_category( ' ' ) ?></small>
                        </h2>
                    </article>
                    <?php endwhile; else : ?>
    	                <h2 class="text-center"><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h2>
                    <?php endif; ?>
                </section>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
