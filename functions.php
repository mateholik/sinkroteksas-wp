<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', false);


include "inc/inc.vite.php";



add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    // Check function exists.
    if( function_exists('acf_add_options_sub_page') ) {
        // Add sub page.
        acf_add_options_sub_page(array(
            'menu_title'  => __('Global site settings'),
        ));
    }
}

//remove extra html in contact form 7
add_filter( 'wpcf7_autop_or_not', '__return_false' );



//add default value functionality to acf image
function add_default_value_to_image_field($field) {
    acf_render_field_setting( $field, array(
      'label'      => __('Default Image ID','acf'),
      'instructions'  => __('Appears when creating a new                                                                       post','acf'),
      'type'      => 'image',
      'name'      => 'default_value',
    ));
  }
add_action('acf/render_field_settings/type=image', 'add_default_value_to_image_field', 20);

function reset_default_image($value, $post_id, $field) {
    if (!$value) {
      $value = $field['default_value'];
    }
    return $value;
  }
  add_filter('acf/load_value/type=image', 'reset_default_image', 10, 3);

function register_menus() { 
  register_nav_menu('main-menu',__('Main Menu')); 
} 
add_action('init', 'register_menus');