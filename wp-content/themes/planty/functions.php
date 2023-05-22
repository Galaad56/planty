<?php

// Action qui permet de charger des scripts dans notre thème
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    // Chargement du style.css du thème parent Astra
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du css/theme.css pour nos personnalisations
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );


/*function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()&& $args->theme_location = 'primary') {
        $items .= '<li><a class"menu_admin" href="http://localhost/planty/wp-admin/">'.var_dump($args).'</a></li>';
    }
   
    return $items;
}*/


add_filter('wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2);

function add_extra_item_to_nav_menu($items, $args) {
   
    if (is_user_logged_in()&& $args->theme_location <> 'footer_menu') {
        // Nouvel élément à ajouter
         $new_item = '<li id="menu-item-admin"><a id="menu_admin" href="http://localhost/planty/wp-admin/">Admin</a></li>';
         //$new_item = '<li id="menu-item-admin"><a id="menu_admin" href="http://localhost/planty/wp-admin/">'.var_dump($args).'</a></li>';
        // Insérer le nouvel élément à l'index souhaité
         $index = 1; 
         $items_array = explode('</li>', $items);
        array_splice($items_array, $index, 0, $new_item);
        $items = implode('</li>', $items_array);
    }
        return $items;    
}

