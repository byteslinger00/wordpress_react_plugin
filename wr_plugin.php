<?php
/**
 * Plugin Name:       wr
 * Description:       wordpress-react plugin
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            DevRabbit
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-react
 */

add_action( 'admin_menu', 'wr_init_menu' );

/**
 * Init Admin Menu.
 *
 * @return void
 */
function wr_init_menu() {
    add_menu_page( __( 'Pansophy', 'wr'), __( 'Pansophy', 'wr'), 'manage_options', 'wr', 'wr_admin_page', 'dashicons-admin-post', '2.1' );
}

/**
 * Init Admin Page.
 *
 * @return void
 */
function wr_admin_page() {
    require_once plugin_dir_path( __FILE__ ) . 'templates/app.php';
}

add_action( 'admin_enqueue_scripts', 'wr_admin_enqueue_scripts' );

/**
 * Enqueue scripts and styles.
 *
 * @return void
 */
function wr_admin_enqueue_scripts() {
    wp_enqueue_style( 'wr-style', plugin_dir_url( __FILE__ ) . 'build/index.css' );
    wp_enqueue_script( 'wr-script', plugin_dir_url( __FILE__ ) . 'build/index.js', array( 'wp-element' ), '1.0.0', true );
}