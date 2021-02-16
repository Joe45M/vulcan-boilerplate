<?php

/**
 * Reevou
 * *
 * @wordpress-plugin
 * Plugin Name:       Boilerplate
 * Plugin URI:        https://joemoses.dev/
 * Description:       boilerplate plugin
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Joe Moses
 * Author URI:        https://joemoses.dev/
 * Text Domain:       reevou
 * License:           GPL v2 or later
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

/*
 |--------------------------------------------------------------------------
 | Autoloader
 |--------------------------------------------------------------------------
 |
 | The autoloader pulls in all of our namespaced classes which we depend on.
 |
*/

require plugin_dir_path( __FILE__ ) . '/vendor/autoload.php';

/*
 |--------------------------------------------------------------------------
 | Lifecycle hooks
 |--------------------------------------------------------------------------\
 |
 | Bind lifecycle hooks, such as activation and deactivation.
 |
*/

\Vulcan\Hook\Activation::execute( function () {
} );


/*
 |--------------------------------------------------------------------------
 | Post types
 |--------------------------------------------------------------------------
 |
 | Bind CPTs throughout the application.
 |
 | CPTs should be registered in ./src/resources/Cpt and implement
 | CreatePostType.
 |
*/
add_action( 'init', [ Vulcan\Cpt\Register::class, 'bind' ] );

/*
 |--------------------------------------------------------------------------
 | Shortcodes
 |--------------------------------------------------------------------------
 |
 | Register shortcode handler classes.
 |
 | Shortcodes should be registered in ./src/resources/Shortcode and implement
 | CreateShortcode.
 |
 | Shortcode views should be stored in views.shortcodes
 |
*/

add_action( 'init', [ Vulcan\Shortcode\Register::class, 'bind' ] );


/*
 |--------------------------------------------------------------------------
 | Pages
 |--------------------------------------------------------------------------
 |
 | Register admin-page handler classes.
 |
*/

add_action( 'admin_menu', [ Vulcan\Page\Register::class, 'bind' ] );

