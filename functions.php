<?php
// ZivahowyServer Wordpress template
// v. 1.004
// By Michal Futera
// http://linktr.ee/mjfutera

add_theme_support( 'post-thumbnails' );

/**
 * Register our sidebars and widgetized areas.
 *
 */

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Widgets area 1',
		'id'            => 'widgets_area_1',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );

function get_the_post(){
    global $post, $posts;
    $post_content = $post->post_content;
    $post_content = apply_filters('the_content', $post_content);
    $post_content = str_replace('</p>', '', $post_content);
    $paras = explode('<p>', $post_content);
    array_shift($paras);

    return $paras[0]; 
}



?>