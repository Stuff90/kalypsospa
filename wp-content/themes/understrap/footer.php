<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>
<div class="wrapper" id="wrapper-footer">

  <div class="footer__dots">
    <div class="footer__dots--center"></div>
  </div>

  <div class="<?php echo esc_html( $container ); ?>">

    <div class="row">

      <div class="col-md-12">

        <footer class="site-footer" id="colophon">


          <?php if ( is_active_sidebar( 'footer_search' ) ) : ?>
            <?php dynamic_sidebar( 'footer_search' ); ?>
          <?php endif; ?>

          <div class="footer__extra">
            <?php get_sidebar( 'footerfull' ); ?>
          </div>

        </footer><!-- #colophon -->

      </div><!--col end -->

    </div><!-- row end -->

  </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page -->

<?php wp_footer(); ?>

<script>
// Load this when the DOM is ready
(function($){
  // You used .myCarousel here.
  // That's the class selector not the id selector,
  // which is #myCarousel
  $('.slideshowPage').carousel();
  // console.log($('#slideshowPage'));
})(jQuery);
</script>
</body>

</html>

