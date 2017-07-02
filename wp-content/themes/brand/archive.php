<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brand
 */

 if( function_exists( "is_woocommerce" ) && is_shop() ) {
   get_header( 'shop' );
 } else {
   get_header();
 } ?>

    <div id="primary" class="container content-area">
    	<main id="main" class="row site-main" role="main">
     		<div id="primary-content">
			<?php
				if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
				 	* Include the Post-Format-specific template for the content.
				 	* If you want to override this in a child theme, then include a file
				 	* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 	*/
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

        if( ! brand_is_jet_module_active( 'infinite-scroll' ) ) :
          the_posts_navigation();
        endif;

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
        </div> <!-- #primary-content -->

        <div id="secondary-content">
       			<?php brand_get_sidebar(); ?>
	   		</div>	<!-- #secondary-content -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
