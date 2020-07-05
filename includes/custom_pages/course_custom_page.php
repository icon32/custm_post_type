<?php
/*
 *
 * Filter the single_template with our custom template file within the plugin
 *
 */

function course_custom_template($single) {

    global $post;
    $plugin_path = plugin_dir_path( __FILE__ );

    /* Checks for single template by post type */
    if ( $post->post_type == 'course' ) {
        if ( file_exists( $plugin_path. '/single-facilities.php' ) ) {
            return $plugin_path . '/single-facilities.php';
        }
    }

    return $single;

}

add_filter('single_template', 'course_custom_template');