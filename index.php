<?php
/*
Plugin Name: Brillat-Savarin - Admin
Plugin URI: https://gitlab.com/hugo-perier/brillat-savarin-wordpress-admin
Description: Style Wordpress back-office as beautiful as the Brillat-Savarin cheese is sweet.
Author: Hugo Périer
Version: 1.0.0
Author URI: https://hugoperier.com/
*/

// Import CSS in Admin
function b_savarin_admin_style() {
    wp_enqueue_style( 'b_savarin_admin-styles', plugins_url('admin.css', __FILE__) );
  }
add_action('admin_enqueue_scripts', 'b_savarin_admin_style');
add_action('login_enqueue_scripts', 'b_savarin_admin_style');
