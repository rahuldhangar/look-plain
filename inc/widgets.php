<?php

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function plain_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer One', 'look-plain' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'look-plain' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Two', 'look-plain' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'look-plain' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Three', 'look-plain' ),
		'id'            => 'footer-3',
		'description'   => esc_html__( 'Add widgets here.', 'look-plain' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Four', 'look-plain' ),
		'id'            => 'footer-4',
		'description'   => esc_html__( 'Add widgets here.', 'look-plain' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'plain_theme_widgets_init' );
