<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'default-sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area" aria-label="<?php esc_attr_e( 'Sidebar', 'lcars' ); ?>">
    
	<?php dynamic_sidebar( 'default-sidebar' ); ?>
</aside><!-- #secondary -->
