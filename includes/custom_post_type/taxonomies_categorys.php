<?php


//Registering Custom Post Type Taxonomi (Categorys) for Courses Custom Post Type


function my_taxonomies_course() {
    $labels = array(
        'name'              => 'Course Categories', 'taxonomy general name' ,
        'singular_name'     => 'Course Category', 'taxonomy singular name' ,
        'search_items'      =>  'Search Course Categories' ,
        'all_items'         =>  'All Courses Categories' ,
        'parent_item'       => 'Parent Courses Category' ,
        'parent_item_colon' =>  'Parent Courses Category:' ,
        'edit_item'         =>  'Edit Course Category' ,
        'update_item'       =>  'Update Course Category' ,
        'add_new_item'      =>  'Add New Course Category' ,
        'new_item_name'     =>  'New Course Category' ,
        'menu_name'         =>  'Courses Categories' ,
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => true,
        'show_in_quick_edit' => true,
        'show_admin_column' => true,
        'capabilities' => array(
            'manage_terms',
            'edit_terms'
        ),
        'show_ui' => true,
        'rewrite' => array(
            'hierarchical'
        ),


    );

    register_taxonomy( 'course_category', 'course', $args );
}
add_action( 'init', 'my_taxonomies_course', 0 );