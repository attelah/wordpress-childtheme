<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{

    wp_enqueue_style('astra-child-theme-css', get_stylesheet_directory_uri() . '/style.css', array('astra-theme-css'), CHILD_THEME_ASTRA_CHILD_VERSION, 'all');

}

add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

function notificationsBar()
{
    echo '<div class="notificationsBar">';
    echo 'Öppettiderna ändras fr.o.m. 1.6! Nya öppettiderna är: Mån-Lö 9 - 15';
    echo '</div>';
}

function googleAnalytics()
{ ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-9YH7FCKPGM"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'G-9YH7FCKPGM');
	</script>
<?php }

add_filter('astra_above_header', 'notificationsBar');
add_action(	'wp_head', 'googleAnalytics', 10);
?>