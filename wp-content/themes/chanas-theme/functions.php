<?php
// Enqueue styles and scripts
function my_custom_theme_assets() {
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_assets' );

// Register navigation menus
function my_custom_theme_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my-custom-theme' ),
    ) );
}
add_action( 'init', 'my_custom_theme_menus' );

function my_custom_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'my-custom-theme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'my_custom_theme_widgets_init' );

function my_custom_page_assets() {
    if ( is_page_template( 'wellawatte-branch.php' ) ) {
        wp_enqueue_style( 'custom-page-style', get_template_directory_uri() . '/css/wellawatte-branch.css' );
        wp_enqueue_script( 'custom-page-script', get_template_directory_uri() . '/js/custom-page.js', array('jquery'), null, true );
    }
}
add_action( 'wp_enqueue_scripts', 'my_custom_page_assets' );
