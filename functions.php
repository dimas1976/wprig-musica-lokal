<?php
/**
 * WP Rig functions and definitions
 *
 * This file must be parseable by PHP 5.2.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp_rig
 */

define( 'WP_RIG_MINIMUM_WP_VERSION', '4.5' );
define( 'WP_RIG_MINIMUM_PHP_VERSION', '7.0' );

// Bail if requirements are not met.
if ( version_compare( $GLOBALS['wp_version'], WP_RIG_MINIMUM_WP_VERSION, '<' ) || version_compare( phpversion(), WP_RIG_MINIMUM_PHP_VERSION, '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Include WordPress shims.
require get_template_directory() . '/inc/wordpress-shims.php';

// Setup autoloader (via Composer or custom).
if ( file_exists( get_template_directory() . '/vendor/autoload.php' ) ) {
	require get_template_directory() . '/vendor/autoload.php';
} else {
	/**
	 * Custom autoloader function for theme classes.
	 *
	 * @access private
	 *
	 * @param string $class_name Class name to load.
	 * @return bool True if the class was loaded, false otherwise.
	 */
	function _wp_rig_autoload( $class_name ) {
		$namespace = 'WP_Rig\WP_Rig';

		if ( strpos( $class_name, $namespace . '\\' ) !== 0 ) {
			return false;
		}

		$parts = explode( '\\', substr( $class_name, strlen( $namespace . '\\' ) ) );

		$path = get_template_directory() . '/inc';
		foreach ( $parts as $part ) {
			$path .= '/' . $part;
		}
		$path .= '.php';

		if ( ! file_exists( $path ) ) {
			return false;
		}

		require_once $path;

		return true;
	}
	spl_autoload_register( '_wp_rig_autoload' );
}

// Load the `wp_rig()` entry point function.
require get_template_directory() . '/inc/functions.php';

// Initialize the theme.
call_user_func( 'WP_Rig\WP_Rig\wp_rig' );

/**
 * Enqueue scripts and styles.
 */
function wps_scripts()
{
	/* Bootstrap CSS CDN*/
	wp_enqueue_style(
		'bootstrap',
		'https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"',
		array(),
		'4.0.0'
	);


	/* Musica CSS */
	/*wp_enqueue_style(
		'wps-style',
		get_template_directory_uri() . '/css/styles.min.css',
		array('bootstrap'),
		'1.0.0'
	);*/

	/* Google Fonts*/
	wp_enqueue_style(
		'google-fonts',
		'https://fonts.googleapis.com/css?family=Lato:300|Love+Ya+Like+A+Sister',
		array('bootstrap'),
		'1.0.0'
	);

	/* AOS Library*/
	wp_enqueue_style(
		'aos',
		'https://cdnjs.cloudflare.com/ajax/libs/aos/2.2.0/aos.css',
		array('bootstrap'),
		'1.0.0'
	);


	wp_deregister_script('jquery');

}

add_action('wp_enqueue_scripts', 'wps_scripts');

/**
 * Style von dem Bild im Beitrag wird geändert
 */
add_filter('the_content', function($content) {
	$content = mb_convert_encoding($content, 'HTML-ENTITIES', "UTF-8");
	libxml_use_internal_errors(true);
	if('post' === get_post_type()) {
		$document = new DOMDocument();
		$document->loadHTML($content);
		if(! is_single()) {
			$postImgs = $document->getElementsByTagName('img');
			foreach ($postImgs as $img):
				$img->setAttribute('class', 'card-img-top');
			endforeach;
		} else {
			$finder = new DOMXPath($document);
			$spaner = $finder->query("//*[contains(@class, 'card-body')]");
			foreach ($spaner as $div):
				$div->setAttribute('style', 'padding: 0');
			endforeach;
		}
		$html = $document->saveHTML();
		return $html;
	}

}, 10, 4);

/**
 * Set a-tag class of navigation to "nav-link" (Bootstrap class)
 */
add_filter( 'nav_menu_link_attributes', function($atts) {

	$atts['class'] = "nav-link";
	return $atts;
}, 10, 1 );

/**
 * set an active link to the bootstrap-class 'active'
 */
add_filter( 'nav_menu_css_class', function($classes, $item) {
	if (in_array('current-menu-item', $classes) ){
		$classes[] = 'active ';
	}
	return $classes;
}, 10, 2 );

// This theme uses wp_nav_menu() in two locations.
register_nav_menus(array(
	'top' => __('Top Menu', 'musica')
));
