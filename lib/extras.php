<?php
/**
 * Clean up the_excerpt()
 */
function roots_excerpt_more($more) {
  return ' &hellip; <a href="' . get_permalink() . '">' . __('Continued', 'roots') . '</a>';
}
add_filter('excerpt_more', 'roots_excerpt_more');

/**
 * Manage output of wp_title()
 */
function roots_wp_title($title) {
  if (is_feed()) {
    return $title;
  }

  $title .= get_bloginfo('name');

  return $title;
}
add_filter('wp_title', 'roots_wp_title', 10);
/*  Logo uploader */
function m1_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'm1_logo' ); // Add setting for logo uploader
         
    // Add control for logo uploader (actual uploader)
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'm1_logo', array(
        'label'    => __( 'Upload Logo', 'm1' ),
        'section'  => 'title_tagline',
        'settings' => 'm1_logo',
    ) ) );
}
add_action( 'customize_register', 'm1_customize_register' );
// /* testing */
// $wp_customize->add_section( 'logo' , array(
//     'title'      => __('Logo','diarios'),
//     'priority'   => 30,
// ) );
//Changing background
$defaults = array(
  'default-color'          => '',
  'default-image'          => '',
  'default-repeat'         => '',
  'default-position-x'     => '',
  'wp-head-callback'       => '_custom_background_cb',
  'admin-head-callback'    => '',
  'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
//Top widget area
function arphabet_widgets_init() {

  register_sidebar( array(
    'name' => 'Topbar',
    'id' => 'top_1',
    'before_widget' => '<div>',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="rounded">',
    'after_title' => '</h2>',
  ) );

  register_sidebar( array(
    'name'          => 'Menu top sidebar',
    'id'            => 'menu_top_1',
    'before_widget' => '<div class="menu-top">',
    'after_widget'  => '</div>'
  ) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );
//Link to media
function wpb_imagelink_setup() {
  $image_set = get_option( 'image_default_link_type' );
  
  if ($image_set !== 'file') {
    update_option('image_default_link_type', 'file');
  }
}
add_action('admin_init', 'wpb_imagelink_setup', 10);