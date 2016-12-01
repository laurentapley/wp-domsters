<?php
function theme_styles() {
    wp_enqueue_style( 'custom_css', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'start_css', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

// /* add JavaScript */

function localize_vars() {
    return array(
        'stylesheet_directory' => get_stylesheet_directory_uri()
    );
}
function theme_js() {
    // wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array('jquery, tether'), '', true );
    wp_enqueue_script( 'ie10_js', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround.js', array('jquery'), '', true );
    wp_enqueue_script( 'global_js', get_template_directory_uri() . '/js/global.js', '', true );

    wp_enqueue_script( 'home_js', get_template_directory_uri() . '/js/home.js', '', true );
    $wsd_home = array( 'template_url' => get_bloginfo('template_url') );
    wp_localize_script( 'home_js', 'wsd_home', $wsd_home );
}
add_action( 'wp_enqueue_scripts', 'theme_js' );



// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
/* menus */
add_theme_support( 'menus' );
function register_theme_menus() {
    register_nav_menus(
      array(
        'primary' => __( 'Primary', 'wp-domsters' )
      )
    );
}
add_action( 'init', 'register_theme_menus' );

function create_widget($name, $id, $description) {
    register_sidebar(array(
      'name' => __( $name ),
      'id'   => $id,
      'description' => __( $description ),
      'before_widget' => '<div class="widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    ));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the hompage');
create_widget( 'Front Page Center', 'front-center', 'Displays on the center of the hompage');
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the hompage');
// sidebar
create_widget( 'Page Sidebar', 'page', 'Displays on side of pages with sidebar');
?>
