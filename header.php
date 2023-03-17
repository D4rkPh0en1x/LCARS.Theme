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
    </head>
    <body <?php body_class(); ?>>



<table style="background-color:transparent; "width="1236" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr align="center">
    <td bgcolor="#000000" width="160" height="2"></td>
    <td bgcolor="#000000" width="10"></td>
    <td bgcolor="#000000" width="906"></td>
    <td bgcolor="#000000" width="10"></td>
    <td bgcolor="#000000" width="160"></td>
  </tr>

<tr align="center">
    <td height="85" colspan="5" valign="top" background="<?php echo get_template_directory_uri();?>/images/lcars_r1_c1.png">
        <img border="0" src="<?php echo get_template_directory_uri();?>/images/numbers2.gif" width="400" height="60">
        <img border="0" src="<?php echo get_template_directory_uri();?>/images/numbers2.gif" width="400" height="60">
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
            <nav id="navbar site-navigation" class="navbar primary-navigation">
                <?php
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
                ?>


                <i class="bi bi-list mobile-nav-toggle d-none"></i>
            </nav><!-- .navbar -->

            </div>
        </header><!-- End Header -->
