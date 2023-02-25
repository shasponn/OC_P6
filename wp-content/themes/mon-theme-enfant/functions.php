<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()

{
    wp_enqueue_style('parent-style', get_template_directory_uri(). 'style.css');
   wp_enqueue_style('child-style', get_stylesheet_directory_uri(). '/style.css');
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args){ 
    if(is_user_logged_in() && $args->theme_location == 'primary'){
        $items = $items . '<li><a title="Admin" href="'. admin_url() .'">Admin</a></li>';
    }
    return $items;
}

function load_scripts() {
    wp_enqueue_script('count-script', get_stylesheet_directory_uri() . '/js/count.js', array('jquery'), '', true );
    }
    add_action( 'wp_enqueue_scripts', 'load_scripts' );
?>

