<?php
/**
 * Left sidebar check.
 *
 * @package understrap
 */

?>

<?php
  if ( is_page() && ($post->post_parent > 0 || has_children())) {
    $sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );
  } else {
    $sidebar_pos = '';
  }
?>

<?php if ( 'left' === $sidebar_pos || 'both' === $sidebar_pos ) : ?>
	<?php get_sidebar( 'left' ); ?>
<?php endif; ?>

<?php {
	$html = '';
	if ( 'right' === $sidebar_pos || 'left' === $sidebar_pos ) {
		$html = '<div class="';
		if ( is_active_sidebar( 'right-sidebar' ) || is_active_sidebar( 'left-sidebar' ) ) {
			$html .= 'col-md-8 content-area" id="primary">';
		} else {
			$html .= 'col-md-12 content-area" id="primary">';
		}
		echo $html; // WPCS: XSS OK.
	} elseif ( is_active_sidebar( 'right-sidebar' ) && is_active_sidebar( 'left-sidebar' ) ) {
		$html = '<div class="';
		if ( 'both' === $sidebar_pos ) {
			$html .= 'col-md-6 content-area" id="primary">';
		} else {
			$html .= 'col-md-12 content-area" id="primary">';
		}
		echo $html; // WPCS: XSS OK.
	} else {
	    echo '<div class="col-md-12 content-area" id="primary">';
	}
}
