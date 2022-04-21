<?php

function hellofresh_register_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_register_style("style-css", get_stylesheet_directory_uri(), array(), $theme_version);
    wp_register_style("bootstrap-css", get_stylesheet_directory_uri().'/assets/bootstrap/css/bootstrap.min.css', null,$theme_version);
    wp_register_style("font-css", get_stylesheet_directory_uri().'/assets/fonts/font-awesome.min.css', null,$theme_version);
    wp_register_style("icon-css", get_stylesheet_directory_uri().'/assets/fonts/ionicons.min.css', null,$theme_version);
    wp_register_style("style-min-css", get_stylesheet_directory_uri().'/assets/css/styles.min.css', null,$theme_version);
    wp_enqueue_style("style-css");
    wp_enqueue_style("bootstrap-css");
    wp_enqueue_style("font-css");
    wp_enqueue_style("icon-css");
    wp_enqueue_style("style-min-css");
}

add_action( 'wp_enqueue_scripts', 'hellofresh_register_styles' );


function hellofresh_theme_scripts() {
    wp_register_script( 'hello-fresh-script1', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js');
    wp_register_script( 'hello-fresh-script2', get_template_directory_uri() . '/assets/js/script.min.js' );
    wp_register_script( 'hello-fresh-script3', get_template_directory_uri() . '/assets/js/jquery.min.js' );
    wp_enqueue_script( 'hello-fresh-script1' );
    wp_enqueue_script( 'hello-fresh-script2' );
    wp_enqueue_script( 'hello-fresh-script3' );

}

add_action( 'wp_enqueue_scripts', 'hellofresh_theme_scripts' );


/**
 * @return void
 */
function setup_theme(){
    register_nav_menus(array(
        "header-menu"=>"Header Menü",
        "container_class" => "collapse navbar-collapse"
    ));
}

add_action("after_setup_theme", "setup_theme");


function add_classes_on_li($classes, $item, $args) {
    $classes[] = 'nav-item';
    return $classes;
}

add_filter('nav_menu_css_class','add_classes_on_li',1,3);


add_action('acf/init', 'hellofresh_acf_init');

function hellofresh_acf_init() {
    if(function_exists('acf_register_block')) {

        acf_register_block(array(
            'name'				=> 'styleheadlines',
            'title'				=> __('Style Headlines'),
            'description'		=> __('Hintergrundbild mit Überschrift und Beschreibung'),
            'render_callback'	=> 'hellofresh_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'background-image', 'headlines' ),
        ));

        acf_register_block(array(
            'name'				=> 'assessment',
            'title'				=> __('Bewertungen'),
            'description'		=> __('Überschrift mit zwei Kundenbewertungen'),
            'render_callback'	=> 'hellofresh_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'quote', 'headline' ),
        ));

        acf_register_block(array(
            'name'				=> 'four-steps-view',
            'title'				=> __('vier-stufen-ansicht'),
            'description'		=> __('Überschrift mit Beschreibung und vier Elementen mit Bild, Titel und Beschreibung und Button mit Titel'),
            'render_callback'	=> 'hellofresh_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'steps', 'headline', 'description', 'view' ),
        ));

        acf_register_block(array(
            'name'				=> 'image-and-description',
            'title'				=> __('Bild und Beschreibung'),
            'description'		=> __('Bild mit nebenstehendem Textblock und Button'),
            'render_callback'	=> 'hellofresh_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'image', 'text', 'description'),
        ));

        acf_register_block(array(
            'name'				=> 'product-review',
            'title'				=> __('Produktvorschau'),
            'description'		=> __('Überschrift und Beschreibung über vier Elementen mit jeweils einer Überschrift und darunter ein Button'),
            'render_callback'	=> 'hellofresh_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'image', 'text', 'description', 'product', 'review'),
        ));

        acf_register_block(array(
            'name'				=> 'full-size-headline',
            'title'				=> __('Vollbild-Überschrift'),
            'description'		=> __('Überschrift, Beschreibung und Button im Vollbild mit Hintergrundbild'),
            'render_callback'	=> 'hellofresh_block_render_callback',
            'category'			=> 'formatting',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'image', 'full-size', 'description', 'background-image', 'headline'),
        ));

    }
}


function hellofresh_block_render_callback( $block ) {
    $slug = str_replace('acf/', '', $block['name']);

    if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
        include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
    }
}


function hellofresh_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );

    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'hellofresh_custom_logo_setup' );


if(function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' 	=> 'Theme General Settings',
        'menu_title'	=> 'Theme Settings',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}


add_filter('acf/settings/save_json', 'hellofresh_acf_save');

function hellofresh_acf_save($path) {
    $path = get_stylesheet_directory() . '/acf-group';
    return $path;
}


add_filter('acf/settings/load_json', 'hellofresh_acf_load');

function hellofresh_acf_load($paths) {
    unset($paths[0]);
    $paths[] = get_stylesheet_directory() . '/acf-group';
    return $paths;
}



