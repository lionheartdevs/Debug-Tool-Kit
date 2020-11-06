<?php
/**
 * Debug Helper Kit
 *
 * @package     LionHeart\DebugKit
 * @author      Chris Norman
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Debug Helper Kit
 * Plugin URI:  https://lionheartdevs.com
 * Description: This is a debug assistant that includes kint, Woops, and Composer.
 * Version:     1.0.0
 * Author:      Chris Norman
 * Author URI:  https://lionheartdevs.com
 * Text Domain: lionheart-debugkit
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

namespace LionHeart\DebugKit;


if(!defined('ABSPATH')){
    exit(' Error! Please try to use this plugin as intended. ');
}


//this require the file in question to be loaded.
require_once(__DIR__ . '/assets/vendor/autoload.php');

//add_action('init', __NAMESPACE__ . '\launch');
//
//function launch(){
//	//launch your plugin or do something.
//}





