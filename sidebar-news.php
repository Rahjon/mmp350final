<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sample
 */

if ( ! is_active_sidebar( 'sidebar-3' ) ) {
	return;
}
?>

<div id="news-Sidebar" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-3' ); ?>

</div><!-- #secondary -->
