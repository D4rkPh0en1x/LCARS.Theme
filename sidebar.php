<?php
/**
 * The sidebar containing the main widget area
 */
if ( ! is_active_sidebar( 'default-sidebar' ) ) {
	return;
}
?>
<aside id="secondary" class="widget-area" aria-label="<?php esc_attr_e( 'Sidebar', 'lcars' ); ?>">
	<?php dynamic_sidebar( 'default-sidebar' ); ?>
	<br/><br/><br/>
	<p align="center">USS Defiant - NX-74205</p>
    <img class="img_center" src="<?php echo get_template_directory_uri(); ?>/images/defiant.png" border="0" alt="Defiant" width="160" height="221" style="vertical-align: middle;" />
</aside><!-- #secondary -->
