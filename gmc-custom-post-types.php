<?php
/*
Plugin Name: GMC Custom Post Types
Version: 1.4
Description: GMC Custom Post Types "Courses"  With ShortCode :  [gmc_display_custom post_type="" category=""]
 */



// Registering Custom Post Type Courses with Wordpress
include 'includes/custom_post_type/custom_post_type_registration';

//Registering Custom Post Type Taxonomi (Categorys) for Courses Custom Post Type
include 'includes/custom_post_type/taxonomies_categorys.php';

// Category Filter for Custom Taxonomi  in admin page
include 'includes/admin_filters/course_taxonomie_filter.php';

// Course Category Display Shortcode !!!  ' [gmc_display_custom post_type="" category=""]  '
include 'includes/short_codes/each_category_shortcode';

//Filter the single_template with our custom template file within the plugin
//include 'includes/custom_pages/course_custom_page.php';

// Load plugin styles and javascripts
include "includes/javascript_includes.php";