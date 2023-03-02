<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', true);


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