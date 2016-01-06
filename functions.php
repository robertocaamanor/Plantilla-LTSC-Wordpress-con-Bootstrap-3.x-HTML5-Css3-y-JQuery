<?php 
	add_theme_support('post-thumbnails');
	add_image_size('slider_thumbs');
	add_image_size('list_articles_thumbs', 450, 370, true);
	add_image_size('single_thumbs');
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'audio' ) );

	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget ' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_widget' => '</h3>',
		));
	register_sidebar(array(
		'name' => 'Footer 01',
		'before_widget ' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_widget' => '</h3>',
		));
	register_sidebar(array(
		'name' => 'Footer 02',
		'before_widget ' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_widget' => '</h3>',
		));
	register_sidebar(array(
		'name' => 'Footer 03',
		'before_widget ' => '<section class="widget">',
		'after_widget' => '</section>',
		'before_title' => '<h3>',
		'after_widget' => '</h3>',
		));
	require_once('wp_bootstrap_pagination.php');
	function customize_wp_bootstrap_pagination($args) {

    $args['previous_string'] = 'previous';
    $args['next_string'] = 'next';

    return $args;
	}
	add_filter('wp_bootstrap_pagination_defaults', 'customize_wp_bootstrap_pagination');
 ?>