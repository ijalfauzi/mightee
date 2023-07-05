<footer id="footer" class="footer">
      <div class="footer-main">
        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-4 col-md-6 footer-widget footer-about">
              <h3 class="widget-title">About Us</h3>
              <img loading="lazy" width="100" class="footer-logo" src="<?php echo get_theme_file_uri( '/images/logo.png' ); ?>" alt="Catur Elang Perkasa">
              <p></p>
              <div class="footer-social">
                <ul>
                  <li><a href="https://www.linkedin.com/company/pt.-catur-elang-perkasa" aria-label="Linkedin"><i
                        class="fab fa-linkedin"></i></a></li>
                  <li><a href="https://www.youtube.com/@CaturElangPerkasaChannel" aria-label="Youtube"><i class="fab fa-youtube"></i></a>
                  </li>
                </ul>
              </div><!-- Footer social end -->
            </div><!-- Col end -->

            <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
              <h3 class="widget-title">Certified by</h3>
              <div class="container">
                <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6">
                      <img src="<?php echo get_theme_file_uri( '/images/ISO-14001.png' ); ?>" alt="">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                      <img src="<?php echo get_theme_file_uri( '/images/OHSAS-18001.png' ); ?>" alt="">
                  </div>
                </div>
                <div class="row">

                  <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                      <img src="<?php echo get_theme_file_uri( '/images/TUV.png' ); ?>" alt="">
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-6">
                      <img src="<?php echo get_theme_file_uri( '/images/SMK3.png' ); ?>" alt="">
                  </div>
                </div>
              </div>
            </div><!-- Col end -->

            <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 footer-widget">
              <h3 class="widget-title">Services</h3>
              <ul class="list-arrow">
                <li><a href="<?php echo site_url( 'operation-maintenance' ); ?>">Operation & Maintenance</a></li>
                <li><a href="<?php echo site_url( 'construction' ); ?>">Construction</a></li>
                <li><a href="<?php echo site_url( 'epc' ); ?>">EPC</a></li>
                <li><a href="<?php echo site_url( 'investment' ); ?>">Investment</a></li>
              </ul>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="copyright-info text-center">
                <span>Copyright &copy;
                  <?php echo date("Y"); ?>. All rights reserved.
                </span>
              </div>
            </div>
          </div><!-- Row end -->

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->
    </footer><!-- Footer end -->
        <?php wp_footer(); ?>
        <!-- Javascript Files
        ================================================== -->

        <!-- initialize jQuery Library -->
        <script src="<?php echo get_theme_file_uri( '/plugins/jQuery/jquery.min.js' ); ?>"></script>
        <!-- Bootstrap jQuery -->
        <script src="<?php echo get_theme_file_uri( '/plugins/bootstrap/bootstrap.min.js' ); ?>" defer></script>
        <!-- Slick Carousel -->
        <script src="<?php echo get_theme_file_uri( '/plugins/slick/slick.min.js' ); ?>"></script>
        <script src="<?php echo get_theme_file_uri( '/plugins/slick/slick-animation.min.js' ); ?>"></script>
        <!-- Color box -->
        <script src="<?php echo get_theme_file_uri( '/plugins/colorbox/jquery.colorbox.js' ); ?>"></script>
        <!-- shuffle -->
        <script src="<?php echo get_theme_file_uri( '/plugins/shuffle/shuffle.min.js' ); ?>" defer></script>


        <!-- Google Map API Key-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
        <!-- Google Map Plugin-->
        <script src="<?php echo get_theme_file_uri( '/plugins/google-map/map.js' ); ?>" defer></script>

        <!-- Template custom -->
        <script src="<?php echo get_theme_file_uri( '/js/script.js' ); ?>"></script>
    </body>
</html>