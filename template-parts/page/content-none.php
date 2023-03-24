<?php
/**
 * Template part for displaying a message that posts cannot be found
 */
?>
<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'Nichts gefunden', 'lcars' ); ?></h1>
	</header>
	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :
			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Bereit etwas zu posten? <a href="%1$s">Hier kanns du loslegen</a>.', 'lcars' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>
			<p><?php esc_html_e( 'Sorry, aber nichts entsprach Deiner Suche. Versuche es mal mit etwas anderem.', 'lcars' ); ?></p>
			<?php
			get_search_form();
		else :
			?>
			<p><?php esc_html_e( 'Es sieht so aus als könnten wir nicht das wonach sie suchen finden. Eventuel kann eine Suche helfen.', 'lcars' ); ?></p>
			<?php
			get_search_form();
		endif;
		?>
	</div>
</section>