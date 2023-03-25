<?php
/**
 * The template for displaying search results.
 */
get_header();
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
			<div id="primary" class="search-content-area content-area">
				<main id="main" class="site-main">
					<?php
					if ( have_posts() ) :
							// Start the loop.
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/page/content', 'search' );
							endwhile;

							echo paginate_links( [
								'prev_text' => esc_html__( 'Zurück', 'lcars' ),
								'next_text' => esc_html__( 'Weiter', 'lcars' ),
							] );

					else :
						get_template_part( 'template-parts/page/content', 'none' );
					?>
					<?php endif; ?>
				</main>
			</div>
        </div><!-- .col -->
    </div><!-- .row -->
</div><!-- .container -->
<?php
get_footer();