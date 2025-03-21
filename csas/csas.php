<?php
/*
 * Plugin Name:       کد سفارشی
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       با استفاده از این افزونه می‌توانید استایل‌ها و اسکریپت‌های مورد نظر خود را به سایت اضافه کنید.
 * Version:           1.0.0
 * Requires PHP:      7.2
 * Author:            فرزانه نظم آبادی
 * Author URI:        https://farzanenazmabadi.ir/
 * Text Domain:       csas
 * Domain Path:       /languages
 */



if ( !defined( 'ABSPATH' ) ) {
    exit;
}

define( 'CSAS_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'CSAS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );


require_once CSAS_PLUGIN_PATH . 'includes/admin.php';

add_action( "admin_head", function(){
    $css_file=CSAS_PLUGIN_URL."assets/style/index.css";
    echo "<link rel='stylesheet' href=".$css_file." >";
} );