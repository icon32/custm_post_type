<?php
// Load plugin javascripts

function gmc_javascript(){

    $plugin_path = '/wp-content/plugins/gmc-custom-post-type';


//    wp_deregister_script('jquery'); // delets previus jquery version to add the new one below
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
    wp_enqueue_script( 'gmc_custom_post_css', $plugin_path . '/js/gmc_custom_post_js.js', array ( 'jquery' ), null, true);

    //Copyright Protection js
    wp_enqueue_script( 'copyright_protection', $plugin_path . '/js/copyright_protection.js', array ( 'jquery' ), null, true);


};

add_action('wp_enqueue_scripts','gmc_javascript');