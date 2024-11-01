<?php



/**



 * The plugin bootstrap file



 *



 * This file is read by WordPress to generate the plugin information in the plugin



 * admin area. This file also includes all of the dependencies used by the plugin,



 * registers the activation and deactivation functions, and defines a function



 * that starts the plugin.



 *



 * @link              https://howtocreateapressrelease.com



 * @since             1.0.0



 * @package           Wireaccess_shortcodes_for_bbpress



 *



 * @wordpress-plugin



 * Plugin Name:       Shortcodes for bbPress



 * Plugin URI:        https://howtocreateapressrelease.com/shortcodes-for-bbpress-plugin-information/



 * Description:       This plugin contains a quick reference list to the available bbpress shortcodes so you can easily access the shortcodes as a reference, from within your wordpress panel.



 * Version:           1.0.0



 * Author:            How To Create A Press Release



 * Author URI:        https://howtocreateapressrelease.com



 * License:           GPL-2.0+



 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt



 * Text Domain:       shortcodes-for-bbpress



 * Domain Path:       /languages



 */







namespace Wireaccess_shortcodes_for_bbpress;







// If this file is called directly, abort.



if ( ! defined( 'WPINC' ) ) {



	die;



}







/**



 * Define Constants



 */







define( __NAMESPACE__ . '\NS', __NAMESPACE__ . '\\' );







define( NS . 'PLUGIN_NAME', 'wireaccess-shortcodes_for_bbpress' );







define( NS . 'PLUGIN_VERSION', '1.0.0' );







define( NS . 'PLUGIN_NAME_DIR', plugin_dir_path( __FILE__ ) );







define( NS . 'PLUGIN_NAME_URL', plugin_dir_url( __FILE__ ) );







define( NS . 'PLUGIN_BASENAME', plugin_basename( __FILE__ ) );







define( NS . 'PLUGIN_TEXT_DOMAIN', 'shortcodes-for-bbpress' );











/**



 * Autoload Classes



 */







require_once( PLUGIN_NAME_DIR . 'inc/libraries/autoloader.php' );







/**



 * Register Activation and Deactivation Hooks



 * This action is documented in inc/core/class-activator.php



 */







register_activation_hook( __FILE__, array( NS . 'Inc\Core\Activator', 'activate' ) );







/**



 * The code that runs during plugin deactivation.



 * This action is documented inc/core/class-deactivator.php



 */







register_deactivation_hook( __FILE__, array( NS . 'Inc\Core\Deactivator', 'deactivate' ) );











/**



 * Plugin Singleton Container



 *



 * Maintains a single copy of the plugin app object



 *



 * @since    1.0.0



 */



class Wireaccess_shortcodes_for_bbpress {







	static $init;



	/**



	 * Loads the plugin



	 *



	 * @access    public



	 */



	public static function init() {







		if ( null == self::$init ) {



			self::$init = new Inc\Core\Init();



			self::$init->run();



		}







		return self::$init;



	}







}







/*



 * Begins execution of the plugin



 *



 * Since everything within the plugin is registered via hooks,



 * then kicking off the plugin from this point in the file does



 * not affect the page life cycle.



 *



 * Also returns copy of the app object so 3rd party developers



 * can interact with the plugin's hooks contained within.



 *



 */



function wireaccess_admin_form_demo_init() {



		return Wireaccess_shortcodes_for_bbpress::init();



}







$min_php = '5.6.0';







// Check the minimum required PHP version and run the plugin.



if ( version_compare( PHP_VERSION, $min_php, '>=' ) ) {



		wireaccess_admin_form_demo_init();



}



