    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4">
    
        <!-- Footer Links -->
        <div class="container-fluid text-center text-md-left">
    
          <!-- Grid row -->
          <div class="row">
    
            <!-- Grid column -->
            <div class="col-md-6 mt-md-0 mt-3">
    
              <!-- Content -->
              <?php if ( is_active_sidebar( 'footer-left' ) ) : ?>
              		<?php dynamic_sidebar( 'footer-left' ); ?>
              <?php endif; ?>
    
            </div>
            <!-- Grid column -->
    
            <hr class="clearfix w-100 d-md-none pb-3">
    
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">
              
              <!-- Content -->
              <?php if ( is_active_sidebar( 'footer-middle' ) ) : ?>
              		<?php dynamic_sidebar( 'footer-middle' ); ?>
              <?php endif; ?>
    
              </div>
              <!-- Grid column -->
    
              <!-- Grid column -->
              <div class="col-md-3 mb-md-0 mb-3">
    
                <!-- Content -->
                <?php if ( is_active_sidebar( 'footer-right' ) ) : ?>
                		<?php dynamic_sidebar( 'footer-right' ); ?>
                <?php endif; ?>
                
              </div>
              <!-- Grid column -->
    
          </div>
          <!-- Grid row -->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center pt-3 pb-1">
          <p>&copy; <?php echo Date('Y'); ?> - <?php bloginfo('title'); ?></p>
        </div>
        <!-- Copyright -->
    
      </footer>
      <!-- Footer -->    <!-- <footer class="container-fluid">
    </footer> -->

    <?php wp_footer(); ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_url') ?>/js/popper.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
  </body>
</html>
