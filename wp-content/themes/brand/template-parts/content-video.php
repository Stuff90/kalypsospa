<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Brand
 */

?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php
		if ( ! is_single() ) { ?>
    	<header class="entry-header">
      <?php
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>	');
		 ?>
        	</header> <!-- .entry-header -->

					<?php
						$content = apply_filters( 'the_content', get_the_content() );
						$video = false;

						// Only get video from the content if a playlist isn't present.
						if ( false === strpos( $content, 'wp-playlist-script' ) ) {
							$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
						}
					?>

					<div class="entry-meta">
						<?php brand_posted_on(); ?>
					</div><!-- .entry-meta -->
        <?php
				if( brand_has_post_thumbnail() && ! is_single() && empty( $video ) ) { ?>
						<a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail( 'post-full' ); ?>
						</a>
							<?php
					}
		} ?>
      <div class="entry-content">
        <?php
				if ( ! empty( $video ) ) :
					foreach ( $video as $video_html ) {
						echo '<div class="entry-video">';
						echo $video_html; // WPCS: XSS ok.
						echo '</div>';
					}
				endif;

			if ( is_single() || empty( $video ) ) :

					the_content( sprintf(
						/* translators: %s: Name of current post */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'brand' ),
						get_the_title()
					) );

					wp_link_pages( array(
						'before'      => '<div class="page-links">' . __( 'Pages:', 'brand' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );

			endif; ?>
			</div><!-- .entry-content -->
            <?php
			if ( 'post' === get_post_type() ) : ?>
				<footer class="entry-footer entry-meta">
					<?php brand_entry_footer(); ?>
				</footer><!-- .entry-footer -->
            <?php
			endif; ?>
    </article> <!-- #post-## -->
