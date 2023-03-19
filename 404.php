<?php
/**
 * The template for displaying 404 pages (not found)
 * @package LCARS
 */

get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="error-404 not-found">
                        <header class="page-header">
                            <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lcars' ); ?></h1>
                        </header><!-- .page-header -->

                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'ninestars' ); ?></p>

                            <?php get_search_form(); ?>
                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- .row -->
</div><!-- .container -->            
<?php
get_footer();