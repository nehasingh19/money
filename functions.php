<?php

add_action('wp_enqueue_scripts', 'addScript');


function addStyle()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', null, '3.3.7');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', null, '3.3.7');
    wp_enqueue_style('creative', get_template_directory_uri() . '/css/creative.css', null, '3.3.7');
    wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/css/magnific-popup.css', null, '3.3.7');
}

add_action('wp_enqueue_scripts', 'addStyle');


if (!function_exists('lfThemeSetup')) {

    function lfThemeSetup()
    {
    	/*
    	 *  menus
    	 */

    	add_theme_support('menus');

        /*
         * add image support to post
        */

        add_theme_support('post-thumbnails');
        /*
         * theme post-formats supports
         *
         */
        add_theme_support('post-formats', array('aside', 'gallery', 'quote', 'image', 'video'));

        add_theme_support('custom-logo');
    }
}

add_action('after_setup_theme', 'lfThemeSetup');


?>