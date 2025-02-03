<?php
/**
 * Plugin Name: Volunteer Opportunity Plugin
 * Plugin URI: 
 * Description: A plugin to manage and display volunteer opportunities.
 * Version: 1.0
 * Author: Michael Long
 */

// Prevent direct file access
if (!defined('ABSPATH')) {
    exit;
}

// Include required files
include_once plugin_dir_path(__FILE__) . 'includes/admin.php';
include_once plugin_dir_path(__FILE__) . 'includes/shortcode.php';

// Run on activation
register_activation_hook(__FILE__, 'volunteer_plugin_activate');
register_deactivation_hook(__FILE__, 'volunteer_plugin_deactivate');
register_uninstall_hook(__FILE__, 'volunteer_plugin_uninstall');

// test to commit

?>
