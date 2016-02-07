<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/favicon.png" type="image/x-icon">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/apple-touch-icon-precomposed.png">
		<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail-crop' );
		$image = $image[0];
		if (is_front_page()) {
			$width = "200";
			$height ="328";
	?>

	<header id="masthead" class="site-header frontpage" role="banner" style="background-image:url('<?php echo $image; ?>');">
		<div class="row logo">
			<div class="small-6 small-centered columns">
				<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/JV_logo.png" alt="<?php bloginfo('name'); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></a></h1>
			</div>
		</div>
	</header>

	<?php
		}else {
		$width = "80";
		$height ="134";
	?>
	<header id="masthead" class="site-header frontpage" role="banner">
		<div class="row logo">
			<?php if (is_single()) { ?>
			<div class="small-5 columns nav nav-left"><?php previous_post_link('<h3><span>%link</span></h3>'); ?></div>
			<?php } ?>
			<div class="small-2 <?php if (!is_single()) { echo "small-centered"; } ?> columns">
				<h1><a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/JV_logo.png" alt="<?php bloginfo('name'); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>"></a></h1>
			</div>
			<?php if (is_single()) { ?>
			<div class="small-5 columns nav nav-right"><?php next_post_link('<h3><span>%link</span></h3>'); ?></div>
			<?php } ?>
		</div>
	</header>
	<?php
		}
	?>

	<section class="container">
