<div class="wrapper" id="page-wrapper">
  <?php
    $slideshow = get_field( "slideshow_landing" );

    $dotsHtml = '';
    $slidesHtml = '';

    foreach($slideshow as $index => $slide) {
      $active = '';
      if ($index === 0) {
        $active = 'active';
      }

      $slidesHtml .= '<div class="carousel-item '. $active .'">' .
        '<img class="d-block img-fluid" src="'. $slide['slideshow_landing_image'] .'" alt="'. $slide['slideshow_landing_title'] .'">' .
        '<div class="carousel-caption d-md-block">' .
          '<h3><a href="'. $slide['slideshow_landing_link'] .'" class="link--white uppercase">'. $slide['slideshow_landing_title'] .'</a></h3>' .
          '<p><a href="'. $slide['slideshow_landing_link'] .'" class="link--white">'. $slide['slideshow_landing_subtitle'] .'</a></p>' .
        '</div>' .
      '</div>';
      $dotsHtml .= '<li data-target="#slideshowPage" data-slide-to="'. $index .'" class="'. $active .'"></li>';
    }
  ?>

  <div id="slideshowPage" class="carousel slide landing__slideshow" data-ride="carousel">
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


  <div class="landing__introductionWrapper">
    <div class="landing__introduction">
      <h2 class="landingIntroduction__title"><?php echo get_field( "excerpt_title_landing" ); ?></h2>
      <div class="landingIntroduction__text"><?php echo get_field( "excerpt_landing" ); ?></div>
    </div>
  </div>

  <h2 class="ladingTitle">Prestations</h2>

  <div class="landing__services">

    <?php
    $services = get_field( "services_landing" );

    foreach($services as $index => $aService) { ?>
      <div class="landingService">
        <div class="landingService__image">
          <img src="<?php echo $aService['services_landing_image']; ?>" alt="<?php echo $aService['services_landing_name']; ?>">
        </div>
        <h3 class="landingService__title">
          <a href="<?php echo $aService['services_landing_link']; ?>" class="link--black uppercase">
            <?php echo $aService['services_landing_name']; ?>
          </a>
        </h3>
        <div class="landingService__excerpt"><?php echo $aService['services_landing_excerpt']; ?></div>
      </div>
    <?php } ?>
  </div>

  <div class="ladingTitle"></div>

  <div class="landing__highlight">
      <?php
      $highlights = get_field( "highlight_landing" );

      foreach($highlights as $index => $aHighlight) { ?>
        <div class="landingHighlight container">
          <div class="landingHighlight__image">
            <img src="<?php echo $aHighlight['highlight_landing_image']; ?>" alt="<?php echo $aHighlight['highlight_landing_name']; ?>">
          </div>
          <div class="landingHighlight__content">
            <h3 class="landingHighlight__title">
              <a href="<?php echo $aHighlight['highlight_landing_link']; ?>" class="link--black uppercase">
                <?php echo $aHighlight['highlight_landing_title']; ?>
              </a>
            </h3>
            <h4 class="landingHighlight__subtitle"><?php echo $aHighlight['highlight_landing_subtitle']; ?></h4>
            <div class="landingHighlight__excerpt"><?php echo $aHighlight['highlight_landing_excerpt']; ?></div>
            <div class="landingHighlight__cta">
              <a href="<?php echo $aHighlight['highlight_landing_link']; ?>" class="btn btn-info link--white" role="button">En savoir plus</a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>




</div>

</div>
