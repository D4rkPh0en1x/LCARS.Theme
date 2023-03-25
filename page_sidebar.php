<?php /* Template Name: Page + SideBar */ ?>
<?php
echo get_post_format();
get_header();
?>
<div class="container wrapper">
    <div class="row">
        <div class="col-lg-9">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <?php
                                while ( have_posts() ) :
                                    the_post();
                                    get_template_part( 'template-parts/page/content', 'page' );
                                endwhile;
                            ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
        </div><!-- .col -->
        <div class="col-lg-3">
            <?php get_sidebar(); ?>
        </div>
    </div><!-- .row -->
</div><!-- .container -->
<?php
get_footer();