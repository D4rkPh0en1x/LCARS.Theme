<?php

/**
 * 
 */




get_header();
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            // do my stuff here
        endwhile;    
    endif;    
get_footer();

