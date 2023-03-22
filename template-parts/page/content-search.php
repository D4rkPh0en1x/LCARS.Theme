<?php
/**
 * Template part for display search results.
 */
?>
<article id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header>

	<div class="entry-summary">
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


        the_post_thumbnail( array(250, 250) ); // full, large, medium, custom size
     
        echo '</a><br/>';

    endif;
    ?>
		<?php the_excerpt(); ?>
	</div>

    <div class="entry-footer">
        <?php
            printf( '<a href="%s">Weiter lesen...</a>', esc_url( get_the_permalink() ) );
        ?>
    </div>

</article>