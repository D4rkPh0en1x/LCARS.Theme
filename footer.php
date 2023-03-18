<?php
/**
 * Contains footer
 */
?>
    
    <!-- ======= Footer ======= -->






<footer id="footer" class="footer">


<table class="table-footer" style="background-color:transparent;" max-width="1236" border="0" cellpadding="0" cellspacing="0" align="center">
    <tr align="center" valign="middle">
        <td bgcolor="#000000" height="50" colspan="5" >
        <?php    
            if ( wp_is_mobile() ){
                echo '<div align="center"><img src="' . get_template_directory_uri() . '/images/evolution.gif" border="0" alt="Evolution" width="373" height="193" style="vertical-align: top; border: 0;" /></div>';
            }
            else {            
                echo '<div align="center"><img src="' . get_template_directory_uri() . '/images/fwscan.gif" border="0" width="284" height="138" style="vertical-align: bottom; border: 0;" />';
                echo '<img src="' . get_template_directory_uri() . '/images/placeholder.png" border="0" alt="placeholder" width="580" height="193" style="vertical-align: top;" />';
                echo '<img src="' . get_template_directory_uri() . '/images/evolution.gif" border="0" alt="Evolution" width="373" height="193" style="vertical-align: top; border: 0;" /></div>';
            }
        ?>
            
            
            </div>
        </td>
    </tr>
    <tr align="center" valign="middle">
            <td height="50" colspan="5" background="<?php echo get_template_directory_uri(); ?>/images/lcars_r11_c1.png">

                <div align="center"></div>
            </td>
    </tr>
    <tr>
        <td height="20" colspan="5" valign="top">    
            <div class="footer-legal text-center">
                
                <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
                    <div class="d-flex flex-column align-items-center align-items-lg-start">
                        <div class="copyright">
                          &copy; Copyright <strong><span>Star Trek Luxembourg</span></strong>. All Rights Reserved </br>
                        </div>
                        <div class="credits">
                            Designed by <a target="_blank" href="https://iseet.fans/">Frank Schroeder</a></br></br></br>
                        </div>

                        <div align="left" class="credits">
                            Star Trek, Star Trek: The Animated Series, Star Trek: The Next Generation, Star Trek: Deep Space Nine, Star Trek: Voyager, <br/>
                            Star Trek: Enterprise, Star Trek: Discovery, Star Trek: Short Treks, and Star Trek: Picard <br/>
                            are all registered trademarks of <a target="_blank" href="//www.cbscorporation.com/">CBS Corporation</a>
                        </br>
                           
                        </br>
                        </div>    
                    </div>

                    <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        <a href="#" class="arrowtop"><i class="bi bi-arrow-up-short"></i></a>
                    </div>

                </div> 
                
            </div>


            <br/>
        </td>
    </tr>
</table>





    </footer><!-- End Footer -->



    <div id="preloader"></div>
    <?php wp_footer(); ?>
</body>
</html>