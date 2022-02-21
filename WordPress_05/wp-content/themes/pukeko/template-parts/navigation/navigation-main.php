<?php
/**
 * Displays main navigation
 *
 * @package Pukeko
 * @since Pukeko 1.0.0
 * @version 1.0.0
 */

?>

<nav id="site-navigation" class="main-navigation" role="navigation">
	<?php wp_nav_menu( array(
		'theme_location'		=> 'menu-1',
		'menu_id' 					=> 'primary-menu',
	) );
	?>
</nav><!-- #site-navigation -->
