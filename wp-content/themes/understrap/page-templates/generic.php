<?php

$hasSlidshow = (bool) get_field( "slideshow" );
$hasBackground = (bool) get_field( "page_title_background" );

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
?>

<div class="wrapper" id="page-wrapper">
  <?php if ($hasBackground) {
    $backgroundImg = get_field( "page_title_background" );
    $bgColor = get_field( "page_title_background_color" );
    $opacityBgColor = get_field( "page_title_background_color_opacity" );

    ?>
    <div style="background-image: url(<?php echo $backgroundImg ?>)" class="pageTitleBackground">
      <div class="pageTitleBackground__color" style="opacity:<?php echo ($opacityBgColor / 100); ?>;background-color:<?php echo $bgColor ?>"></div>
    </div>
  <?php } ?>
  <?php if ($hasSlidshow) { ?>
    <?php
      $slideshow = get_field( "slideshow" );

      $dotsHtml = '';
      $slidesHtml = '';

      foreach($slideshow as $index => $slide) {
        $active = '';
        if ($index === 0) {
          $active = 'active';
        }

        $slidesHtml .= '<div class="carousel-item '. $active .'">' .
          '<img class="d-block img-fluid" src="'. $slide['slideshow_image'] .'" alt="'. $slide['slideshow_label'] .'">' .
          '<div class="carousel-caption d-none d-md-block">' .
            '<h3>'. $slide['slideshow_label'] .'</h3>' .
          '</div>' .
        '</div>';
        $dotsHtml .= '<li data-target="#slideshowPage" data-slide-to="'. $index .'" class="'. $active .'"></li>';
      }
    ?>

    <div id="slideshowPage" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <?php echo $dotsHtml; ?>
      </ol>

      <div class="carousel-inner" role="listbox">
          <?php echo $slidesHtml; ?>
      </div>

      <a class="carousel-control-prev" href="#slideshowPage" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#slideshowPage" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>

  <?php } ?>
  <div class="<?php echo esc_html( $container ); ?>" id="content" tabindex="-1">
    <div class="row">
      <?php
      if ($post->ID === 340) { ?>
        <div class="container">
          <h1 class="pageHost__title entry-title pageTitle"><?php echo $post->post_title; ?></h1>

          <div class="pageHost__content">
            <div class="pageHost__text"><?php echo $post->post_content; ?></div>
            <div class="pageHost__embedWrapper"><?php echo $backgroundImg = get_field( "embed_airbnb" ); ?></div>
          </div>
        </div>
      <?php } else {
        get_template_part( 'global-templates/left-sidebar-check', 'none' ); ?>
        <main class="site-main" id="main">
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'loop-templates/content', 'page' ); ?>
          <?php endwhile; ?>
        </main>
      <?php } ?>
    </div>
    <?php if ( is_page() && ($post->post_parent > 0 || has_children())) : ?>
      <?php if ( 'right' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>
        <?php get_sidebar( 'right' ); ?>
      <?php endif; ?>
    <?php endif; ?>
  </div>
</div>

</div>
