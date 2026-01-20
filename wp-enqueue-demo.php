<?php
/**
 * Plugin Name: WP Enqueue Demo
 * Plugin URI: https://github.com/pusyarthai/wp-enqueue-demo
 * Description: Custom JS enqueue demo for rtCamp application
 * Version: 1.0
 * Author: Pusyarth Sai
 * Author URI: https://github.com/pusyarthai
 * License: GPL2
 */
function demo_enqueue_assets() {
    wp_enqueue_script(
        'demo-js',
        plugin_dir_url( __FILE__ ) . 'js/demo.js',
        array( 'jquery' ),
        '1.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'demo_enqueue_assets' );
