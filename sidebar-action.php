<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sample
 */

if ( ! is_active_sidebar( 'sidebar-4' ) ) {
	return;
}
?>

<div id="action-Sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-4' ); ?>

</div><!-- #secondary -->
