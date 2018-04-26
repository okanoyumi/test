<?php
/**
 * Functions
 *
 * @package WordPress
 **/

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-header' );
// add_editor_style( array( 'assets/style.css' ) );

/**
 * Custom-fields
 **/
function news_init() {
  register_post_type (
      'news', array(
          'label'         => 'news',
          'public'        => true,
          'supports'      => array( 'title, editor', 'thumbnail', 'excerpt', 'custom-fields' ),
          'menu_position' => 5,
          'has archive'   => true,
          'taxonomies'    => array( 'news' ),
          'show_in_rest'  => true,
          'singular_name' => 'news',
    )
  );
  $args = array(
          'label'        => 'NEWS',
          'public'       => true,
          'show_ui'      => true,
          'hierarchical' => true,
  );
  register_taxonomy ( 'news', $args );
}
add_action( 'init', 'news_init' );

/**
 * Stylesheetの読み込み
 **/
function add_files() {
  // wp_enqueue_script(
  // 'menu', get_template_directory_uri() . 'functions.js' );

  wp_enqueue_style(
  'main', get_template_directory_uri() . '/assets/style.css' );
}

add_action( 'wp_enqueue_scripts', 'add_files' );
