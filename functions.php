<?php
register_nav_menus(array('nav' => 'GlobalNavigation'));

register_sidebar( array(
	'name' => 'Information',
	'id' => 'info-area',
	'description' => 'Information',
	'before_widget' => '<div id="%1$s" class="info-area %2$s">',
	'after_widget' => '</div>',
	'before_title' => '<h2 class="widget-title">',
	'after_title' => '</h2>',
));
register_sidebar( array(
    'name' => 'HomeWidgetArea',
    'id' => 'home-widget-area',
    'description' => 'The HOME widget area',
    'before_widget' => '<div id="%1$s" class="home-widget-container %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widget-title">',
    'after_title' => '</h2>',
));

add_theme_support('post-thumbnails');
set_post_thumbnail_size(110, 110, true);

function new_post_type() {
	register_post_type(
		'custom-post-name',
		array(
			'label' => 'custom-post-name',
			'public' => true,
			'hierarchical' => false,
			'has_archive' => true,
			'supports' => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'comment',
				'trackbacks',
				'custom-fields',
				'revisions'
			),
			'menu_position' => 5
		)
	);
	register_taxonomy(
		'custompostcat',
		'custom-post-name',
		array(
			'label' => 'custom-post-category',
			'public' => true,
			'hierarchical' => true,
		)
	);
}
add_action('init', 'new_post_type');

function new_scripts() {
	wp_enqueue_script('jquery');
}
add_action('wp_enqueue_scripts', 'new_scripts');

define('NO_HEADER_TEXT', true);
define('HEADER_IMAGE', '%s/lib/img/customheader.jpg');
define('HEADER_IMAGE_WIDTH', 960); 
define('HEADER_IMAGE_HEIGHT', 300);

add_custom_image_header('','admin_header_style');
function admin_header_style() {
?><style type="text/css">
	#headimg {
		width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
		height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
	}
</style><?php
}

register_default_headers( array(
	'header_evening' => array(
		'url' => '%s/lib/img/customheader02.jpg',
		'thumbnail_url' => '%s/lib/img/customheader02_thum.jpg'
	),
	'header_night' => array(
		'url' => '%s/lib/img/customheader03.jpg',
		'thumbnail_url' => '%s/lib/img/customheader03_thum.jpg'
	)
));

add_theme_support('post-formats',
	array(
  	'aside', 'gallery', 'status', 'audio', 'video' 
  )
);

function remove_gallery_style() {
	return "<div class='post-gallery-style'>";
}
add_filter('gallery_style', 'remove_gallery_style');
?>