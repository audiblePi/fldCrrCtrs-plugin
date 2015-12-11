<?php
/**
* Plugin Name: Florida Career Centers Dashboard
* Plugin URI: http://www.pippindesign.com
* Description: Custom Dashboard for Florida Career Center Users
* Version: BETA
* Author: Pippin Design
* Author URI: http://www.pippindesign.com
*
* @author B Hicks
* @version 1.0
*/

define('fcc_FILE', __FILE__);
define('fcc_PATH', plugin_dir_path(__FILE__));

require fcc_PATH . 'shortcodes.php';
//require fcc_PATH . 'dashboard.php';
require fcc_PATH . 'ajax.php';

add_action('admin_init', 'admin_init');
add_action('admin_menu', 'add_page');

add_action('wp_enqueue_scripts', 'fcc_load_scripts' );
function fcc_load_scripts(){
    wp_enqueue_style( 'fcccss', '/wp-content/plugins/fcc-dashboard/css/styles.css' );
    //wp_enqueue_style( 'skincss', '/wp-content/plugins/fcc-dashboard/css/style.default.css' );
    wp_enqueue_style( 'pretifycss', '/wp-content/plugins/fcc-dashboard/prettify/prettify.css' );
    //wp_enqueue_style( 'pretifycss', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );

    wp_enqueue_script( 'prettifyjs', '/wp-content/plugins/fcc-dashboard/prettify/prettify.js' );
    wp_enqueue_script( 'jqueryui', '/wp-content/plugins/fcc-dashboard/js/jquery-ui-1.9.2.min.js' );
    wp_enqueue_script( 'bootstrap', '/wp-content/plugins/fcc-dashboard/js/bootstrap.min.js' );
    wp_enqueue_script( 'jquerycookie', '/wp-content/plugins/fcc-dashboard/js/jquery.cookie.js' );
    wp_enqueue_script( 'fullcalendar', '/wp-content/plugins/fcc-dashboard/js/fullcalendar.min.js' );
    wp_enqueue_script( 'skinjs', '/wp-content/plugins/fcc-dashboard/js/custom.js' );
    wp_enqueue_script( 'fccjs', '/wp-content/plugins/fcc-dashboard/js/fccmain.js' );
    wp_enqueue_script( 'tablesorter', '/wp-content/plugins/fcc-dashboard/js/jquery.tablesorter.min.js' );
}

// add_filter( 'wpmem_login_redirect', 'my_login_redirect', 10, 2 );
// function my_login_redirect( $redirect_to, $user_id ) {
//     return '/my-dashboard/';
// }

// add_filter( 'wpmem_logout_redirect', 'my_logout_redirect' );
// function my_logout_redirect(){
//     return '/';
// }

// add_action( 'profile_update', 'custom_profile_redirect', 12 );
// function custom_profile_redirect() {
//     wp_redirect( wp_get_referer());
//     exit;
// }

// add_filter( 'wpmem_login_form_args', 'remove_wpmem_txt_code' );
// add_filter( 'wpmem_register_form_args', 'remove_wpmem_txt_code' );
// function remove_wpmem_txt_code( $args ){
//     $args = array('txt_before' => '', 'txt_after'  => '');
//     return $args;
// }

// add_action( 'wpmem_register_redirect', 'my_reg_redirect' );
// function my_reg_redirect() {
//     wp_redirect( '/registration-successful/' );
//     exit();
// }

?>