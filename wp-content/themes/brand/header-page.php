<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Brand
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="top-searchform">  <a href="#" id="close-search"> </a> <?php get_search_form(); ?> </div>
<?php if( ! brand_is_hidden( 'navigation' ) ) { ?>
	<div id="mobile-menu-wrapper">
		<a id="mobile-menu-close-button" href="#"></a>
    	<?php
			wp_nav_menu( array(
				'theme_location'   => 'primary',
				'container'        => 'nav',
				'container_class' => '',
				//'depth'           => 2
				)
		)	;
		?>
	</div> <!-- #mobile-menu-wrapper --> <?php
}

do_action('brand_before_wrapper'); ?>
<div id="wrapper"> <?php
  do_action('brand_before_header');

if( ! brand_is_hidden( 'header' ) ) { ?>
	<div id="header-wrapper" <?php brand_header_wrapper_class() ?>>
    <?php do_action('brand_before_inside_header');
		if( is_front_page() && function_exists( 'the_custom_header_markup' ) ) {
			the_custom_header_markup();
		}
    do_action('brand_after_inside_header'); ?>
	</div> <!-- #header-wrapper --> <?php
}
  do_action('brand_after_header');

	if( ! brand_is_hidden( 'headline' ) && ! brand_use_sections() ) {

	 $titleBg = get_field('page_title_background');
	 if ($titleBg) {
	 	$bgColor = get_field('page_title_background_color');
	 	$opacityBgColor = get_field('page_title_background_color_opacity') / 100;
		?>

	 	<div style="background-image: url(<?php echo $titleBg ?>)" class="pageTitle pageTitle--bg">
		 	<div class="pageTitle__colorBg" style="opacity:<?php echo $opacityBgColor ?>;background-color:<?php echo $bgColor ?>"></div>
	 <?php } else { ?>
		<div class="pageTitle">
	 <?php } ?>
	 		<div class="container">
				<h1 class="pageTitle__inner"><?php the_title(); ?></h1>
			</div>
		</div>
  <?php } ?>

	<div id="content" class="site-content" >
