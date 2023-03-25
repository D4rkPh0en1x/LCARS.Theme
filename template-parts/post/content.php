<?php
/**
 * Template part for displaying posts.
 */
?>
<article id="post-<?php the_ID() ?>">
    <header class="entry-header">
        <?php
        if ( is_singular() ) :
            the_title( '<h1 class="entry-title">', '</h1>' );
        else :
            the_title( '<h2 class="entry-title"><a class="entry-link" href="'.esc_url( get_permalink() ).'">', '</a></h2>' );
        endif;
        ?>
    </header>
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
    <!-- Post Content -->
    <?php if ( is_home() || is_archive() ) : ?>
    <div class="entry-content">
        <?php the_excerpt(); ?>
    </div>
    <?php elseif( is_single() ) : ?>
        <div class="entry-content">
            <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ninestars' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div>
    <?php endif; ?>
</article>