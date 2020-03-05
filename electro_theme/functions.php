<?php
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);
function enqueue_child_theme_styles() {
 $directory_template = get_template_directory_uri();  
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}


 if( function_exists('acf_add_options_page') ) {

          acf_add_options_page();

}

/*
*  Change the Options Page menu to 'Theme Options'
*/
if( function_exists('acf_set_options_page_title') )
{
  acf_set_options_page_title( __('Theme Options') );
}
register_nav_menus(array(
    'footer' => __('footer menu', 'footer_menu')
));

class UL_Class_Walker extends Walker_Nav_Menu { 
 function start_lvl(&$output, $depth) {
   $indent = str_repeat("\t", $depth);
   $output .= "\n$indent<ul class=\"dropdown-menu\">\n";

}
} 
// ---------------------------------------------------------------------------------------------------------------
