<?php
/**
 * Olepod functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 */

/**
 https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 The fact that a child theme’s functions.php is loaded first means that you can make the user functions of your theme pluggable —that is, replaceable by a child theme— by declaring them conditionally.

if ( ! function_exists( 'theme_special_nav' ) ) {
    function theme_special_nav() {
        //  Do something.
    }
}
In that way, a child theme can replace a PHP function of the parent by simply declaring it beforehand.
*/

add_action( 'wp_enqueue_scripts', 'olepod_enqueue_styles' );
function olepod_enqueue_styles() {
 
    $parent_style = 'parent-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}

/**
 * Implement the Custom Header feature.
 */
require dirname( __FILE__ ) . '/inc/custom-header.php' ;

// echo get_template_directory_uri();   // http://localhost/olepod/wp-content/themes/twentyseventeen
// echo get_template_directory();       // /Users/vason/Sites/olepod/wp-content/themes/twentyseventeen
// echo get_parent_theme_file_path();   // /Users/vason/Sites/olepod/wp-content/themes/twentyseventeen
// echo get_stylesheet_directory_uri(); // http://localhost/olepod/wp-content/themes/olepod

?>