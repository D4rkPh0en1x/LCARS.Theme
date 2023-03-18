<?php
/**
 * Contains the header.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ) ?>">
        <meta name="viewport" content="width=device-width, intial-scale=1">
        <?php wp_head(); ?>
        <script type="text/javascript">
            var c=document.cookie;
            document.cookie='size='+Math.max(screen.width,screen.height)+';';
        </script>
    </head>
    <body <?php body_class(); ?>>



<table class="table-header" style="background-color:transparent;" max-width="1236" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr align="center">
    <td bgcolor="#000000" width="160" height="2"></td>
    <td bgcolor="#000000" width="10"></td>
    <td bgcolor="#000000" width="906"></td>
    <td bgcolor="#000000" width="10"></td>
    <td bgcolor="#000000" width="160"></td>
  </tr>

<tr align="center">
    <td height="85" colspan="5" valign="top" background="<?php echo get_template_directory_uri(); ?>/images/lcars_r1_c1.png">


<?php 

if ( wp_is_mobile() ){
 
}
else {



    echo '<img border="0" src="' . get_template_directory_uri() . '/images/numbers2.gif" width="400" height="60">';
    echo '<img border="0" src="' . get_template_directory_uri() . '/images/numbers2.gif" width="400" height="60">';

}
?>

        
    </td>
</tr>

<tr align="left" valign="middle">
    <td height="20" colspan="5">
        <span class="pathway">

     
        </span>
    </td>
  </tr>

<tr>
    <td height="45" colspan="5" valign="top" background="<?php echo get_template_directory_uri(); ?>/images/lcars_r3_c1.png">&nbsp;</td>
</tr>


<tr>
    <td width="160" height="25" align="center" valign="middle">
        <span class="small">
            <?php 

            setlocale(LC_TIME, 'de_DE.UTF8');

            DEFINE('_DATE_FORMAT_LC', "%A, der %d. %B %Y"); //Verwendet das PHP strftime Format
            DEFINE('_DATE_FORMAT_LC2', "%A, %d %B %Y %H:%M");

            echo (strftime (_DATE_FORMAT_LC)); 
            
            ?>

        </span>
    </td>
</tr>





</table>











       <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top" data-scrollto-offset="0">
            <div class="container-fluid d-flex align-items-center justify-content-between">

            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id, 'full' );

                if ( has_custom_logo() ) {
                    printf(
                        '<a href="%1$s" class="logo d-flex align-items-center scrollto me-auto me-lg-0"><img src="%2$s"/></a>',
                        esc_url( home_url() ),
                        esc_url( $logo[0] )
                    );
                } else {
                    echo bloginfo( 'name' );
                }

            ?>
            
                <?php
                if ( wp_is_mobile() ){

                    echo '<nav id="navbar site-navigation" class="navbar primary-navigation">';
 
                
                    if ( has_nav_menu( 'primary' ) ) :
                        wp_nav_menu( [
                            'theme_location' => 'primary',
                            'container'      => false,
                            'menu_class'     => 'menu-wrapper',
                            'container_class' => 'primary-menu-container',
                            'menu_id'        => '',
                            'depth'          => 3,
                            'fallback_cb'     => false
                        ] );
                    endif;

                    echo '<i class="bi bi-list mobile-nav-toggle d-none"></i>';
                    echo '</nav><!-- .navbar -->';
                }    
                ?>

            </div>
        </header><!-- End Header -->
