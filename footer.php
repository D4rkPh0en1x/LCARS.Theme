<?php
/**
 * Contains footer
 */
?>
    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="footer-content">
    <div class="container">
        <div class="row">

        <div class="col-lg-3 col-md-6 footer-1">
            <?php if ( is_active_sidebar( 'lcars_foot_1' ) ) : ?>
            <div id="secondary-sidebar" class="lcars_foot_1">
            <?php dynamic_sidebar( 'lcars_foot_1' ); ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="col-lg-2 col-md-6 footer-2">
        <?php if ( is_active_sidebar( 'lcars_foot_2' ) ) : ?>
            <div id="secondary-sidebar" class="lcars_foot_2">
            <?php dynamic_sidebar( 'lcars_foot_2' ); ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="col-lg-3 col-md-6 footer-3">
        <?php if ( is_active_sidebar( 'lcars_foot_3' ) ) : ?>
            <div id="secondary-sidebar" class="lcars_foot_3">
            <?php dynamic_sidebar( 'lcars_foot_3' ); ?>
            </div>
            <?php endif; ?>
        </div>

        <div class="col-lg-4 col-md-6 footer-4">
        <?php if ( is_active_sidebar( 'lcars_foot_4' ) ) : ?>
            <div id="secondary-sidebar" class="lcars_foot_4">
            <?php dynamic_sidebar( 'lcars_foot_4' ); ?>
            </div>
            <?php endif; ?>
        </div>

        </div>
    </div>
    </div>

    <div class="footer-legal text-center">
    <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">

        <div class="d-flex flex-column align-items-center align-items-lg-start">
        <div class="copyright">
            &copy; Copyright <strong><span>Star Trek Luxembourg</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by <a href="https://iseet.fans/">Frank Schroeder</a>
        </div>
        </div>

        <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

    </div>
    </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>
    <?php wp_footer(); ?>
</body>
</html>