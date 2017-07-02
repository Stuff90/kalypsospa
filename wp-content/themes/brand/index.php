<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brand
 */

 $brand_settings = wp_parse_args(
	 get_option( 'brand_settings', array() ),
	 brand_get_defaults()
 );

if( is_front_page() && 'slider' === $brand_settings['header_type_front'] ) {
	get_header( 'slider' );
} else {
	get_header();
}
?>

    <div id="primary" class="container content-area">
    	<main id="main" class="row site-main" role="main">
        	<div id="primary-content">
            <div class="brand-grid">
			<?php
				if ( have_posts() ) :

					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/*
				 		* Include the Post-Format-specific template for the content.
				 		* If you want to override this in a child theme, then include a file
				 		* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 		*/
            if( ! brand_image_no_padding() ) {
						get_template_part( 'template-parts/content', get_post_format() );
          } else {
            get_template_part( 'template-parts/content-image-full-width', get_post_format() );
          }

					endwhile; ?>
        </div> <!-- .brand-grid --> <?php
          if( ! brand_is_jet_module_active( 'infinite-scroll' ) ) :
					  the_posts_navigation( array( 'prev_text' => __( '&laquo; Previous', 'brand' ), 'next_text' => __( 'Next &raquo;', 'brand' ) ) );
          endif;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
        	</div> <!-- #primary-content -->

            <div id="secondary-content">
       			<?php brand_get_sidebar(); ?>
	   		</div>	<!-- #secondary-content -->
        </main> <!-- #main -->
    </div> <!-- #primary -->

    <!-- Pagination -->

  <!--  <div class="container" id="pagination">
    	<div class="row">
        	<div class="col-md-12">
            <button type="button" class="btn btn-primary btn-lg" id="btn_holder">Older</button>
            <button type="button" class="btn btn-primary btn-lg" id="btn_newer">Newer</button>
            </div>
        </div>
    </div> --> <!-- End Pagination -->

<?php
get_footer();
