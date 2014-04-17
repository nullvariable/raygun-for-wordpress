<?php
/*
Plugin Name: Raygun for WordPress
Version: 0.1-alpha
Description: Raygun, for WordPress
Author: Doug Cone
Author URI: DougCone.com
Plugin URI: https://github.com/nullvariable/raygun-for-wordpress
Text Domain: raygun-for-wordpress
Domain Path: /languages
*/

add_action('wp_head', 'raygun4js', 00);
add_action('admin_head', 'raygun4js', 00);
function raygun4js() {
    printf('<script src="%sraygun4js.js"></script><script>Raygun.init("%s");</script>'."\n", plugin_dir_url(__FILE__), RAYGUN_KEY);
}