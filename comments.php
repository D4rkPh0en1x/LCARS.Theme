<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package lcars
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Navigation', 'lcars' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Ältere Kommentare', 'lcars' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Neuere Kommentare', 'lcars' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-above -->
		<?php endif; // Check for comment navigation. ?>

		<div class="comments">
			<div class="commment_title text-center empgc ">
				<h3><?php
						printf( // WPCS: XSS OK.
						esc_html( _nx( 'Ein Kommentar', '%1$s Kommentare', get_comments_number(), 'comments title', 'lcars' ) ),
						number_format_i18n( get_comments_number() ),
						'<span>' . get_the_title() . '</span>'
					);
				 ?>
				 </h3>
			 </div>

			<ol class="comment-list">
				<?php
				wp_list_comments( [
					'callback'      => 'lcars_comment',
					'style' => 'ol',
					'short_ping' => true
				] );
				?>
        	</ol>
		</div><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Navigation', 'lcars' ); ?></h2>
			<div class="nav-links">

				<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Ältere Kommentare', 'lcars' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Neuere Kommentare', 'lcars' ) ); ?></div>

			</div><!-- .nav-links -->
		</nav><!-- #comment-nav-below -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().


	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Kommentarfunktion geschlossen.', 'lcars' ); ?></p>
	<?php
	endif;
	comment_form();
	?>
</div><!-- #comments -->
