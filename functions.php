<?php
/**
 * Theme Functions
 */

function dw_enqueue_scripts() {
    //register bootstrap css
    wp_register_style('bootstrap-css',get_template_directory_uri().'/assets/src/library/css/bootstrap.min.css',array(),false,'all');
    wp_register_style('style-css',get_stylesheet_uri(),array(),
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );
    //register bootstarp js
    wp_register_script('bootstrap-js',get_template_directory_uri().'/assets/src/library/js/bootstrap.min.js',array('jquery'),false,true);
    wp_register_script('main-js',get_template_directory_uri().'/assets/main.js',array(),filemtime(get_template_directory().'/assets/main.js'),true);
    wp_enqueue_style('style-css');
    wp_enqueue_script('main-js');
    //enqueue bootstarp css and scripts
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_script('bootstrap-js');


}

add_action('wp_enqueue_scripts', 'dw_enqueue_scripts');
