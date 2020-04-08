<?php

  function ju_enqueue(){
    $uri      = get_theme_file_uri();

    wp_register_style('ju_google_font','https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap');
    wp_register_style('ju_bootstrap',$uri.'/assets/css/bootstrap.css');
    wp_register_style('ju_style',$uri.'/assets/css/style.css');
    wp_register_style('ju_dark',$uri.'/assets/css/dark.css');
    wp_register_style('ju_font_icons',$uri.'/assets/css/font-icons.css');
    wp_register_style('ju_animate',$uri.'/assets/css/animate.css');
    wp_register_style('ju_magnific_popup',$uri.'/assets/css/magnific-popup.css');
    wp_register_style('ju_responsive',$uri.'/assets/css/responsive.css');
    wp_register_style('ju_bootstrap',$uri.'/assets/css/bootstrap.css');
    wp_register_style('ju_custom',$uri.'/assets/css/custom.css');

    wp_enqueue_style('ju_google_font');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_style');
    wp_enqueue_style('ju_dark');
    wp_enqueue_style('ju_font_icons');
    wp_enqueue_style('ju_animate');
    wp_enqueue_style('ju_magnific_popup');
    wp_enqueue_style('ju_responsive');
    wp_enqueue_style('ju_bootstrap');
    wp_enqueue_style('ju_custom');


    wp_register_script('ju_plunins', $uri.'/assets/js/plugins.js',[], false , true);
    wp_register_script('ju_function', $uri.'/assets/js/functions.js',[], false , true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('ju_plunins');
    wp_enqueue_script('ju_function');
  }
