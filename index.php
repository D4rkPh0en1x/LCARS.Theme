<?php
/**
 * The main template file.
 */
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div id="primary" class="content-area container">
                <main id="main" class="site-main">
                    <?php
                    if ( have_posts() ) :
                        while ( have_posts() ) :
                            the_post();
                            get_template_part( 'template-parts/post/content', get_post_format() );
                        endwhile;

                        echo paginate_links( [
                            'prev_text' => esc_html__( 'Zurück', 'lcars' ),
                            'next_text' => esc_html__( 'Weiter', 'lcars' ),
                        ] );
                    else :
                        get_template_part( 'template-parts/page/content', 'none' );
                    endif;
                    ?>
                </main>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div><!-- .row -->
</div><!-- .container -->
<?php
get_footer();