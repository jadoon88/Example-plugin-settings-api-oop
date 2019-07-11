<?php
/**
 * Plugin Name: Settings Demo
 * Plugin URI: https://merrycode.com
 * Description: Test Plugin To Demonistrate Theme Options
 * Version: 1.0.0
 * Author: Umair Khan Jadoon
 * Author URI: https://www.merrycode.com/
 * Developer: MerryCode
 * Developer URI: https://www.merrycode.com/
 * Text Domain: settings-demo
 * Domain Path: /languages
 *
 *
 * Copyright: © 2009-2019 MerryCode.
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */


 if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_action( 'init', 'settings_demo_init' );

function settings_demo_init()
{
    include plugin_dir_path(__FILE__).'classes/basic.php';

    $basic=new MCSettingsDemo\Basic();


}
