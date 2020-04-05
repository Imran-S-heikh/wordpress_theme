<?php

  function load_style(){
    wp_enqueue_style('stylesheet',get_template_directory_uri().'/style.css');
  }
  add_action('wp_enqueue_scripts','load_style');


  function load_script(){
    wp_enqueue_script('script',get_template_directory_uri().'/bundle.js','',1.0,true);
  }
  add_action('wp_enqueue_scripts','load_script');


  //register menus
  if ( ! function_exists( 'register_nav_menu' ) ) {

    function mytheme_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'text_domain' ),
            'footer_menu'  => __( 'Footer Menu', 'text_domain' ),
        ) );
    }
    add_action( 'after_setup_theme', 'mytheme_register_nav_menu', 0 );
  }


  //woo code
//   remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
//   remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
//
//   add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
// add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);
//
// function my_theme_wrapper_start() {
//     echo '<section id="main">';
// }
//
// function my_theme_wrapper_end() {
//     echo '</section>';
// }

// function extra_heading(){
//
//   echo  '<h1>THis is addded by a hook</h1>';
//
// }
// add_action('header_end','extra_heading');

// function side_bar(){
//   echo '<script>console.log("this was called")</script>';
//   echo '<h1>Another hook</h1>';
// }
// add_action('woocommerce_before_cart_totals','side_bar',1);
//
// function before_checkout_hook(){
//   echo '<h1>Tjos is theck out hook</h1>';
// }
// add_action('woocommerce_archive_description','before_checkout_hook');
// // this code below works great and adds my Woo sidebar correctly
// add_action( 'header_end', 'woo_sidebar' );
// function woo_sidebar() {
//     // if (is_woocommerce()) {
//         echo '<div class="primary">';
//         dynamic_sidebar( 'filters' );
//         echo '</div>';
//         echo "<h1>Why not working</h1>";
//     // }
// }
//
//
// function wpse121723_register_sidebars() {
//     register_sidebar( array(
//         'name' => 'Home right sidebar',
//         'id' => 'home_right_1',
//         'before_widget' => '<div>',
//         'after_widget' => '</div>',
//         'before_title' => '<h2 class="rounded">',
//         'after_title' => '</h2>',
//     ) );
// }
// add_action( 'widgets_init', 'wpse121723_register_sidebars' );
