<?php
/**
 * Template part to display page content in page.php.
 */
?>
<article id="post-<?php the_ID(); ?>">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	    <!-- Post thumbnail -->
            <?php
            $post_id=get_the_ID();
            $featured_img_url = get_the_post_thumbnail_url( $post_id );          
            if ( has_post_thumbnail() ) :
                
                echo '<a class="lcars_featured_image glightbox" href="' . $featured_img_url . '"   
                data-type="image" 
                data-effect="fade" 
                data-width="900px" 
                data-height="auto" 
                data-zoomable="false" 
                data-draggable="false" 
                data-lightbox="' . $post_id . '" 
                data-title="' . get_the_title() . '">';
                the_post_thumbnail( array(450, 450) ); // full, large, medium, custom size
                echo '</a><br/>';
            endif;
            ?>
    <div class="entry-content">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                'after'  => '</div>',
            ) );
        ?>
		<div class="widget-content-bottom">
		<?php dynamic_sidebar( 'lcars_content_bottom' ); ?>
		</div>	
    </div>
    <?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'ninestars' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
    <?php endif; ?>
</article>