<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// function my_scripts_method() {
//     wp_enqueue_script(
//         'custom',
//         get_stylesheet_directory_uri() . '/assets/js/custom.js'
//     );
// }

// add_action( 'wp_enqueue_scripts', 'my_scripts_method' );


?>