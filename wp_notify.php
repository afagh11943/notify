<?php
/*
Plugin Name: افزونه اعلانات وردپرس
Plugin URI: http://amin.com
Description: پلاگینی جهت ایجاد عضویت ویژه برای کاربران سایت
Author: aminkhalili
Version: 1.0.0
Author URI:  http://amin.com
*/
defined('ABSPATH') || exit('NO ACCESS');
$WPNOTIFY_uploud = wp_upload_dir();
define('WPNOTIFY_DIR', trailingslashit(plugin_dir_path(__FILE__)));
define('WPNOTIFY_URL', trailingslashit(plugin_dir_url(__FILE__)));
define('WPNOTIFY_INC', trailingslashit(WPNOTIFY_DIR . 'inc'));
define('WPNOTIFY_TPL', trailingslashit(WPNOTIFY_DIR . 'tpl'));
define('WPNOTIFY_LIBS', trailingslashit(WPNOTIFY_INC . 'libs'));
define('WPNOTIFY_CSS', trailingslashit(WPNOTIFY_URL . 'assets' . '/' . 'css'));
define('WPNOTIFY_JS', trailingslashit(WPNOTIFY_URL . 'assets' . '/' . 'js'));
define('WPNOTIFY_IMAGES', trailingslashit(WPNOTIFY_URL . 'assets' . '/' . 'images'));
define('WPNOTIFY_FONTS', trailingslashit(WPNOTIFY_URL . 'assets' . '/' . 'fonts'));
define('WPNOTIFY_uploud_dir', trailingslashit($WPNOTIFY_uploud['basedir'] . DIRECTORY_SEPARATOR . 'WPVIP'));
define('WPNOTIFY_uploud_url', trailingslashit($WPNOTIFY_uploud['baseurl'] . '/' . 'WPVIP'));

function wpnot_activate(){
    require_once 'start_plugin.php';
}

function wpnot_deactivate(){

}

register_activation_hook(__FILE__, 'wpnot_activate');
register_deactivation_hook(__FILE__, 'wpnot_deactivate');