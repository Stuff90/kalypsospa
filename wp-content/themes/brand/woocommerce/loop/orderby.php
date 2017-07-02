<?php
/**
 * Show options for ordering
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/orderby.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$orderby_selected = isset( $_GET['orderby'] ) ? $_GET['orderby'] : 'menu_order';
$orderby_selected = array_key_exists( $orderby_selected, $catalog_orderby_options ) ? $orderby_selected : 'menu_order'; ?>

<ul class="sorting" style="">
	<li class="selected-order"> <?php echo esc_html( $catalog_orderby_options[$orderby_selected] ) ?></li>
		<li class="orderby-list">
			<ul>
			<?php
			unset( $catalog_orderby_options[$orderby_selected] );
			foreach ( $catalog_orderby_options as $id => $name ) { ?>
				<li><a class="button" href="<?php echo esc_url( add_query_arg( 'orderby', $id ) ); ?>"><?php echo esc_html( $name ) ?> </a></li> <?php
			} ?>
			</ul>
		</li>
</ul>
