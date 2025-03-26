<?php
/*
 * Plugin Name:       custome codes
 * Plugin URI:        https://github.com/farzane-na/custome-code-plugin
 * Description:       Using this plugin, you can add your desired styles and scripts to your site.
 * Version:           1.0.0
 * Requires PHP:      7.2
 * Author:            farzane nazmabadi
 * Author URI:        https://farzanenazmabadi.ir/
 * Text Domain:       csas
 * Domain Path:       /languages
 */

function csas_load_textdomain() {
    load_plugin_textdomain('csas', false, dirname(plugin_basename(__FILE__)) . '/languages');
}
add_action('plugins_loaded', 'csas_load_textdomain');


if ( !defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CSAS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'CSAS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define("ADD_SCRIPT_FILE",plugin_dir_url( __FILE__ )."includes/assets/admin.js");
define("CSAS_PLUGIN_VERSION","1.0.0");


require_once CSAS_PLUGIN_PATH . 'includes/admin.php';

add_action( "admin_head", function(){
    $css_file=CSAS_PLUGIN_URL."assets/style/index.css";
    echo "<link rel='stylesheet' href=".$css_file." >";
} );