<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package National Alliance
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src= "<?php echo get_template_directory_uri(); ?>/js/jquery-2.1.4.min.js"></script>
<script src= "<?php echo get_template_directory_uri(); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript">
	$('#slider').cycle({
		fx:   'scrollHorz',
		next:  '#next',
		prev:  '#prev',
		pager: '#pager',
		timeout: 3000,
		speed: 900
	});
</script>

<style type="text/css">
#hero{
	width:960px;
	height:500px;
	display:block;
	position:relative;
	margin:auto;
}

#slider{
	width:700px;
    height:350px;
	display:block;
	/*position:absolute;*/
	overflow: hidden;
	margin: auto;

	
}

	.info{
	width:960px;
	height:80px;
	display:block;
	position:relative;
	bottom: 100px;
    background-color:#015883;
    opacity: .65;
    z-index:999;
	}

	.info h2{
     font-family: sans-serif;
     font-size: 20px;
     font-weight: bold;
     color:#fff;
     padding: 15px 0 0 20px;

	}
    .info p {
	font-family: sans-serif;
     font-size: 15px;
     font-weight: lighter;
     color:#fff;
     padding: 0 0 0 20px;
     line-height: 1px;
 }
    

    .items{

        width:700px;
        height:350px;


   
    }
</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="logoBox">
<div class="page-logo">
 <img src="<?php bloginfo('template_directory'); ?>/images/logo3.jpg" />
</div>

<div id="searchEngine">
<img src="<?php bloginfo('template_directory'); ?>/images/searchIcon.jpg" />
<input class="search" type="text" value="search" />
</div>
<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'sample' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
</nav><!-- #site-navigation -->
 </div>

<div id ="Hero">
	
        <!--Buttons to slide player-->
	<!--
	<div id= "pager"></div>
	<div id= "pause">&#10073;&#10073;</div>
	<div id= "play">&#9658;</div>
	<div id= "next">&#10704;</div>
	<div id= "prev">&#10703;</div>
     -->

	<div id= "slider">

		<div class="items">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image1.jpg">
           
           <div class="info">

             <h2>image1</h2>
			 <p>This is image1</p>
			</div><!--End info-->


		</div><!--End items-->


		<div class="items">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image2.png">
           
           <div class="info">

             <h2>Image2</h2>
			 <p>This is image</p>
			</div><!--End info-->


		</div><!--End items-->

		<div class="items">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image3.jpg">
           
           <div class="info">

             <h2>Image3</h2>
			 <p>This is image3</p>
			</div><!--End info-->


		</div><!--End items-->

		<div class="items">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image4.jpg">
           
           <div class="info">

             <h2>Image4</h2>
			 <p>This is image4</p>
			</div><!--End info-->


		</div><!--End items-->

		<div class="items">
          <img src="<?php echo get_template_directory_uri(); ?>/images/image5.jpg">
           
           <div class="info">

             <h2>Image5</h2>
			 <p>This is image5</p>
			</div><!--End info-->


		</div><!--End items-->

	
	</div><!--End slider-->	

</div><!--End of Hero-->  
<hr>  
		

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'sample' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		
		

	</header><!-- #masthead -->

	<div id="content" class="site-content">
