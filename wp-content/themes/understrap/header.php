<?php
$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400|Open+Sans:300,300i,600,600i" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

  <header class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

    <a class="skip-link screen-reader-text sr-only" href="#content"><?php
      esc_html_e( 'Skip to content', 'understrap' );
    ?></a>

    <nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

    <?php if ( 'container' == $container ) : ?>
        <div class="container header__wrapper">
    <?php endif; ?>

      <button class="header__menuToggle navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>


      <?php if ( ! has_custom_logo() ) { ?>

          <?php if ( is_front_page() && is_home() ) : ?>

            <h1 class="header__websiteName navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

          <?php else : ?>

              <a class="header__websiteName navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

          <?php endif; ?>


      <?php } else {
          the_custom_logo();
      } ?>


      <?php wp_nav_menu(
          array(
              'theme_location'  => 'primary',
              'container_class' => 'collapse navbar-collapse header__menuWrapper',
              'container_id'    => 'navbarNavDropdown',
              'menu_class'      => 'navbar-nav',
              'fallback_cb'     => '',
              'menu_id'         => 'main-menu',
              'walker'          => new WP_Bootstrap_Navwalker(),
          )
      ); ?>
      <?php if ( 'container' == $container ) : ?>
      </div>
      <?php endif; ?>

    </nav>

  </header>
