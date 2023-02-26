<?php 
function saddem_theme_support(){
    //title-func
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'saddem_theme_support');

function saddem_menus(){
    //menues func
    $locations = array(
        'primary' => "Desktop main header navigation",
        'mobile'  => "Small screens menu"
    );

    register_nav_menus($locations);
}

add_action('init', 'saddem_menus');

function saddem_register_styles () {
    $version = wp_get_theme()->get('version');
    wp_enqueue_style('saddem-custom-style',get_template_directory_uri()."/style.css", array(), $version, 'all');
    wp_enqueue_style('saddem-oswald-font',"http://fonts.googleapis.com/css?family=Oswald:100,400,300,700", array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'saddem_register_styles');


function saddem_register_scripts () {
    add_action('wp_enqueue_scripts', 'saddem_register_scripts');
    wp_enqueue_script('saddem-jquery','http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', array(),'2.1.1',true);
    wp_enqueue_script('saddem-custom-script',get_template_directory_uri()."/assets/js/main.js", array(),'1.0',true);
}
   



?>