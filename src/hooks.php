<?php defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


/**
 * Register all widgets.
 */
function soul_legacy_assist_load_widgets()
{
    register_widget('soul_legacy_progress_widget');
}


/**
 * Define install function if there is none.
 */
if (!function_exists('soul_legacy_assist_install')) {
    function soul_legacy_assist_install()
    {
        //add_option('wow_progress', $options);
    }
}


/**
 * Define uninstall function if there is none.
 */
if (!function_exists('soul_legacy_assist_uninstall')) {
    function soul_legacy_assist_uninstall()
    {
        //delete_option('wow_progress');
    }
}