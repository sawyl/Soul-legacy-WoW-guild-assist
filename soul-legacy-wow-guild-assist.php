<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );
/*
Plugin Name: Soul Legacy Wow Guild Assist
Plugin URI:  https://github.com/sawyl/soul-legacy-wow-guild-assist
Description: Plugin made to help people organize guild stuff and merits in their wordpress sites. Made for the old good days of WoW.
Version:     0.1
Author:      Jere Junttila
Author URI:  http://sawyl.net
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Domain Path: /languages
Text Domain: soul-legacy-assist

Soul Legacy Wow Guild Assist is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

/**
 * Add actions and include files to make our plugin run.
 */
add_action('widgets_init', 'soul_legacy_assist_load_widgets'); //load widgets
wp_enqueue_style('soul-legacy-style', plugin_dir_url( __FILE__ ) . 'css/style.css'); //load styles.

//include the needed files.
include 'app/hooks.php';
include 'app/config.php';
include 'app/progression-widget.php';
if (is_admin()) {
    include 'app/admin.php';
}