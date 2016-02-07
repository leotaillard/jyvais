<?php
	add_filter('show_admin_bar', '__return_false');
	add_image_size( 'image-home', 480, 480 ); // 1200 pixels wide by 400 pixels tall, hard crop mode



function category_id_class( $classes ) {
	global $post;
	foreach ( ( get_the_category( $post->ID ) ) as $category ) {
		$classes[] = $category->category_nicename;
	}
	return $classes;
}
add_filter( 'post_class', 'category_id_class' );
add_filter( 'body_class', 'category_id_class' );

?>