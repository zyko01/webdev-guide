<?php

function web_guide_resources(){
    // get the stylesheet
    wp_enqueue_style('webguide', get_template_directory_uri() . '/css/webguide.css', array(), '1.0.0', 'all' );
    // include bootstrap 
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
    // custom js
    wp_enqueue_script('jquery');
    wp_enqueue_script('customjs', get_template_directory_uri() . '/js/webguide.js', array(), '1.0.0', true );
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.7', 'all');
}
    add_action('wp_enqueue_scripts', 'web_guide_resources');

function web_guide_support(){
    // add menus to the admin panel
    add_theme_support('menus');

    // Register Navigation Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer' => __('Footer Menu')
    ));
}
    add_action('init', 'web_guide_support');

// ADDING SIDEBAR FUNCTION
function webguide_sidebar_setup(){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar-one',
        'class' => 'custom',
        'description' => 'Standard sidebar',
        'before-widget' => '<aside class="widget %2$s" id="%1$s" >',
        'after-widget' => '</aside>',
        'before-title' => '<h4 class="widget title">',
        'after-title' => '</h4>'
    ));
}
    add_action("widgets_init", "webguide_sidebar_setup");