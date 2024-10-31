<?php
/**
 * Plugin Name:       Page Template Column
 * Plugin URI:        http://codismo.com/plugins/page-template-column
 * Description:       Adds a column to the pages table in WP Admin > Pages displaying the page template used.
 * Version:           1.0.0
 * Author:            Codismo
 * Author URI:        http://codismo.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       page-template-column
 * Domain Path:       /languages
 */

// called directly, abort
if ( ! defined( 'WPINC' ) ) {
	die;
}

// constants
define( 'PAGE_TEMPLATE_COLUMN_VERSION', '1.0.0' );
define( 'PAGE_TEMPLATE_COLUMN_URL', plugin_dir_url( __FILE__ ) );
define( 'PAGE_TEMPLATE_COLUMN_BASENAME', plugin_basename( __FILE__ ) );
define( 'PAGE_TEMPLATE_COLUMN_DIR_NAME', dirname( plugin_basename( __FILE__ ) ) );
define( 'PAGE_TEMPLATE_COLUMN_ABS', dirname(__FILE__) );

// include
include PAGE_TEMPLATE_COLUMN_ABS . '/inc/class.general.php';