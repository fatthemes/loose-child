<?php
/**
 * Loose functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package loose child
 */

add_action( 'wp_enqueue_scripts', 'loose_child_enqueue_styles' );

function loose_child_enqueue_styles() {
    wp_enqueue_style( 'loose-parent-style', get_template_directory_uri() . '/style.css' );
}
