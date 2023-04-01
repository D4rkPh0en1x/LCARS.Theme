<?php
/**
 * lcars functions and definations.
 */




 if ( ! function_exists( 'lcars_setup' ) ) {
    /**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
    function lcars_setup() {
        /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Crafty Press, use a find and replace
		 * to change 'lcars' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'lcars', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

        /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

        /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

        // Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'lcars_custom_background_args', array(
			'default-image'          => get_template_directory_uri() . '/images/stback.jpg',
			'default-preset'         => 'custom', // 'default', 'fill', 'fit', 'repeat', 'custom'
			'default-position-x'     => 'center',    // 'left', 'center', 'right'
			'default-position-y'     => 'center',     // 'top', 'center', 'bottom'
			'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
			'default-repeat'         => 'no-repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
			'default-attachment'     => 'fixed',  // 'scroll', 'fixed'
			'default-color'          => '000000',
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
		) ) );
		
		// add_theme_support( 'custom-background', $defaults );

        /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

        // Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

        /**
		 * Add support for core custom logo.
		 */
		add_theme_support( 'custom-logo', [
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		] );

         /**
		 * Add Support for Custom Page Header
		 */
		add_theme_support( 'custom-header', array(
			'flex-width'	=> true,
			'width'			=> 640,
			'flex-height'	=> true,
			'height'		=> 450,
			'default-image' => '',
		) );

        /**
		 * Add Post Type Support
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio' ) );

        // This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'lcars' ),
            'footer' => esc_html__( 'Footer Menu', 'lcars' ),
		) );

		// add_filter( 'show_admin_bar', '__return_false' );
    }
}
add_action( 'after_setup_theme', 'lcars_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

 function lcars_content_width()
{
    $GLOBALS['content_width'] = apply_filters( 'lcars_content_width', 640 );

	// Check if is single post and there is no sidebar.
	if ( is_single() && ! is_active_sidebar( 'default-sidebar' ) ) {
		$content_width = 740;
	}
}


add_action( 'after_setup_theme', 'lcars_content_width', 0 );

/**
 * Register Sidebar widget area.
 *
 * @since 1.0.0
 */
function lcars_sidebar_widgets_init() {
	// Default Sidebar
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'lcars' ),
		'id'            => 'default-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'lcars' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'lcars_sidebar_widgets_init' );

/**
 * Enqueue public scripts and styles.
 */
function lcars_public_scripts() {
    // Styles.
    //wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', [], wp_rand(), 'all' );
    //wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/vendor/bootstrap-icons/bootstrap-icons.css', [], wp_rand(), 'all' );
	//wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/all.css', [], wp_rand(), 'all' );
	//wp_enqueue_style( 'fontawesome-v4', get_template_directory_uri() . '/assets/vendor/fontawesome/css/v4-shims.css', [], wp_rand(), 'all' );
	//wp_enqueue_style( 'fontawesome-v5', get_template_directory_uri() . '/assets/vendor/fontawesome/css/v5-font-face.css', [], wp_rand(), 'all' );
    wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.css', [], wp_rand(), 'all' );
    wp_enqueue_style( 'glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/css/glightbox.min.css', [], wp_rand(), 'all' );
    wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.css', [], wp_rand(), 'all' );

	wp_enqueue_style( 'variables', get_template_directory_uri() . '/assets/css/variables.css', [], wp_rand(), 'all' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', [], wp_rand(), 'all' );

    // Scripts.
    //wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [ 'jquery' ], wp_rand(), true );
    wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', [ 'jquery' ], wp_rand(), true );
    wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/assets/vendor/glightbox/js/glightbox.min.js', [ 'jquery' ], wp_rand(), true );
    wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', [ 'jquery' ], wp_rand(), true );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/vendor/swiper/swiper-bundle.min.js', [ 'jquery' ], wp_rand(), true );
    //wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', [ 'jquery' ], wp_rand(), true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', [ 'jquery' ], wp_rand(), true );
}
add_action( 'wp_enqueue_scripts', 'lcars_public_scripts' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lcars_widgets_init()
{
/*	register_sidebar( array(
	register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'lcars' ),
        'id'            => 'lcars_foot_1',
        'description'   => esc_html__( 'Add widgets here.', 'lcars' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'lcars' ),
        'id'            => 'lcars_foot_2',
        'description'   => esc_html__( 'Add widgets here.', 'lcars' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'lcars' ),
        'id'            => 'lcars_foot_3',
        'description'   => esc_html__( 'Add widgets here.', 'lcars' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'lcars' ),
        'id'            => 'lcars_foot_4',
        'description'   => esc_html__( 'Add widgets here.', 'lcars' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );*/
	
	register_sidebar( array(
        'name'          => esc_html__( 'Content Bottom', 'lcars' ),
        'id'            => 'lcars_content_bottom',
        'description'   => esc_html__( 'Add widgets here.', 'lcars' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );	
	
	
}

add_action( 'widgets_init', 'lcars_widgets_init' );

add_filter( 'get_the_archive_title', function ($title) {
	if ( is_category() ) {
	  $title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
	  $title = single_tag_title( '', false );
	} elseif ( is_author() ) {
	  $title = '<span class="vcard">' . get_the_author() . '</span>' ;
	}
	return $title; 
  });

add_action( 'pre_get_posts', 'new_sort_order'); 
function new_sort_order($query) {
	if(is_archive()  && $query->is_main_query() ):
		//Set the order ASC or DESC
		$query->set( 'order', 'ASC' );
		//Set the orderby
		$query->set( 'orderby', 'DATE' );
	endif;    
};


/* Blog single post meta */
if(!function_exists('lcars_blog_singlepost_meta')){
function lcars_blog_singlepost_meta(){
	global $lcars_opt;	
	 if (!empty($lcars_opt['lcars_blog_post_meta']) && $lcars_opt['lcars_blog_post_meta']==true){
		
	}else{
		if( 'post' == get_post_type() ) { ?>				
				
				
					<div class="lcars-blog-meta table-responsive">
						<table class="table table-borderless lcars_comments">
							<thead>
								<tr class="text-center align-middle" >
									<th scope="col"><i class="fa-regular fa-calendar"></i></th>
									<th scope="col"><i class="fa-regular fa-hand-spock"></i> Klassisch</th>
									<th scope="col"><i class="fa-solid fa-user-astronaut"></i> Neu</th>
									<th scope="col"><i class="fa-regular fa-pen-to-square"></i></th>
								</tr>
							</thead>		
							<tbody>
								<tr class="text-center align-middle">
									<td>
										<?php echo get_the_time(get_option('date_format')); ?>
									</td>
									<td>
										<?php stardate_theme('classic'); ?>
									</td>
									<td>
										<?php stardate_theme('XI'); ?>
									</td>
									<td>
										<?php echo get_the_modified_date(get_option('date_format')); ?>
									</td>
								</tr>
							</tbody>
								  
						</table>
						<!--
						
						<table class="table table-borderless lcars_comments">
							  <thead>
								<tr class="text-center align-middle" >
								  	<th scope="col"><i class="fa-regular fa-user"></i></th>
									<th scope="col"><i class="fa-regular fa-comments"></i></th>
								</tr>
							  </thead>	
							<tbody>
								<tr class="text-center align-middle">
									<td>
										<?php the_author(); ?>
									</td>
									<td>
										<?php if ( comments_open() || get_comments_number() ) {?>
											<a href="<?php comments_link(); ?>"><i class="icofont-comment"></i>
												<?php comments_number( esc_html__('0 Comments','lcars'), esc_html__('1 Comment','lcars'), esc_html__('% Comments','lcars') );?>
											</a>
											
											<?php }else{?>
												<span><i class="fa-regular fa-comments"></i> <?php echo esc_html__('Kommentarfunktion geschlossen','lcars'); ?></span>
											<?php } ?>
										
									</td>
								</tr>
							</tbody>							
						</table>	
						-->

					</div>
				
		<?php } // if post ?>
	<?php } 
	}
}

/* lcars comment form */
add_filter('comment_form_default_fields','lcars_comments_form');
if(!function_exists('lcars_comments_form')){
    function lcars_comments_form($default){
			$default['author'] = '<div  class="comment_forms from-area"><div  class="comment_forms_inner">
			
			<div class="comment_field">
			<div class="row">
				<div class="col-md-6 form-group">
					<input id="name" class="form-control" name="author" type="text" placeholder="Name*"/>
				</div>';

			$default['email'] = '
				<div class="col-md-6 form-group">				
					<input id="email" class="form-control"  name="email" type="text" placeholder="E-Mail*"/>
				</div> 
			</div>';	

			$default['phone'] = '
				<div class="row">
					<div class="col-md-6 form-group">				
						<input id="phone" class="form-control"  name="phone" type="text" placeholder="Rufnummer"/>
					</div> 
				';			
			$default['title'] = '
				<div class="col-md-6 form-group">
					<input id="title" class="form-control" name="url" type="text" placeholder="Webseite"/>
				</div>   
				</div>   
			</div>  ';	
			$default['url']='';
			$default['message'] ='<div class="comment_field"><div class="textarea-field"><textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="Schreibe dein Kommentar*..."></textarea></div></div>   </div></div>';																		

 
        return $default;
    }
}
add_filter('comment_form_defaults','lcars_form_default');

 if(!function_exists('lcars_form_default')){
    function lcars_form_default($default_info){
        if(!is_user_logged_in()){
            $default_info['comment_field'] = '';
        }else{
            $default_info['comment_field'] = '<div  class="comment_forms"><div  class="comment_forms_inner"> <div class="comment_field"><div class="textarea-field"><textarea name="comment" id="comment" class="form-control" cols="30" rows="10" placeholder="Schreibe ein Kommentar..."></textarea></div></div> </div></div>';
        }
         
        $default_info['submit_button'] = '<button class="comment_lcars_btn button" type="submit">'.esc_html__('Kommentar hinzufügen','lcars').'</button>';
        $default_info['submit_field'] = '%1$s %2$s';
        $default_info['comment_notes_before'] = ' ';
        $default_info['title_reply'] = esc_html__('Schreibe ein Kommentar ','lcars');
        $default_info['title_reply_before'] = '<div class="commment_title"><h3> ';
        $default_info['title_reply_after'] = '</h3></div> ';
 
        return $default_info;
    }
 
 }
	
	
//lcars comment show
if(! function_exists('lcars_comment')){
	function lcars_comment($comment,$arg, $depth){
		$GLOBALS ['comment'] = $comment;
		?>

		<!-- comment reply -->		
		<div class="post_comment">
			<div class="comment_inner">
				<div class="post_reply">
					<div class="post_reply_content">											
						<div class="post_reply_inner" id="comment-<?php comment_ID(); ?>">
							
							<div class="table-responsive">
							<table class="table table-borderless lcars_comments">
							  <thead>
								<tr class="text-center align-middle" >
								  <th scope="col"><i class="fa-solid fa-image-portrait"></i></th>
								  <th scope="col"><i class="fa-regular fa-user"></i></th>
								  <th scope="col"><i class="fa-regular fa-calendar"></i></th>
								  <th scope="col"><i class="fa-solid fa-reply"></i></th>
								</tr>
							  </thead>
							  <tbody>
								<tr class="text-center align-middle">
								  	<td>
										<div class="post_reply_thumb">
								 		<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"> <?php echo get_avatar($comment,80); ?></a>
										</div>
									</td>
								  	<td>									
										<div class="post_reply">
										<div class="st"><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php echo get_comment_author(); ?></a></div>
									</td>
								  	<td>
										<span class="span_left"><?php echo get_comment_date(get_option('date_format')); ?></span>
									</td>
								  	<td>
										<?php 
											comment_reply_link(
												array_merge($arg,array(
													'reply_text' => '<span class="span_right">'. esc_html__('Antworten','lcars').'</span>',
													'depth'    => $depth,
													'max_depth' => $arg['max_depth']
												))
											); 
										?>   
									</td>
								</tr>
								<tr class="text-center align-middle">
								  <td colspan="4"><i class="fa-regular fa-comments"></i></td>
								</tr>
								<tr>
								  <td colspan="4"><?php comment_text(); ?></td>
								</tr>
							  </tbody>
							</table>
							</div>
							
							
							
							
							


							
								<div class="edit_comment"><?php edit_comment_link(esc_html__('(Edit)' , 'lcars' ),'<small class="ecome">','</small>') ?></div>
							</div>
							
						</div>
					</div>																
				</div>
			</div>
			
	
		<?php
	}
}
