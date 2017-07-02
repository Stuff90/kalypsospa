<?php
  $hasBackground = (bool) get_field( "page_title_background" );
?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

  <header class="entry-header">
    <?php if ($hasBackground) {
      the_title( '<h1 class="entry-title pageTitle pageTitle--hasBackground">', '</h1>' );
    } else {
      the_title( '<h1 class="entry-title pageTitle">', '</h1>' );
    } ?>

  </header><!-- .entry-header -->

  <!--<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>-->

  <div class="entry-content pageContent">
    <?php if ( is_page() && $post->post_parent > 0 ) { ?>
      <p class="pageContent__parent">
        <a href="<?php echo get_permalink($post->post_parent); ?>">
          <?php echo get_the_title($post->post_parent); ?>
        </a> > <?php echo get_the_title(); ?>
      </p>
    <?php } ?>

    <?php the_content(); ?>

    <?php
    wp_link_pages( array(
      'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
      'after'  => '</div>',
    ) );
    ?>

  </div><!-- .entry-content -->

  <footer class="entry-footer">

    <?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

  </footer><!-- .entry-footer -->

</article><!-- #post-## -->
