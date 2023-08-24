<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


if( function_exists('acf_add_options_page') ) {

   acf_add_options_page(array(
       'page_title'    => 'Header & footer',
       'menu_title'    => 'Header & footer',
       'menu_slug'     => 'header-footer-settings',
       'capability'    => 'edit_posts',
       'redirect'      => false
   ));

   acf_add_options_sub_page(array(
       'page_title'    => 'Footer',
       'menu_title'    => 'Footer',
       'parent_slug'   => 'header-footer-settings',
   ));


}


?>