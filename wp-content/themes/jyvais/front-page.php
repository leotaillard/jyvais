<?php
/*
Template Name: Front
*/
get_header(); ?>
 <?php get_template_part( 'parts/category-home' ); ?>

<section class="intro" role="main">

	<div id="container" class="grid row small-up-2 medium-up-4 large-up-4">
<?php query_posts('post_type=post&showposts=-1'); ?>
<?php while ( have_posts() ) : the_post(); ?>
<?php
	$classes = array(
		'column',
		'grid-item'
	);
?>
	        <div <?php post_class($classes); ?>>
	        	<div class="article">
		        	<?php
			        	if ( has_post_thumbnail() ) { ?>
			        	    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail( 'image-home' ); ?>
							</a>
					<?php } ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<span class="pic-caption">
							<h3 class="pic-title"><?php the_title(); ?></h3>
						</span>
					</a>
				</div>
	        </div>
<?php endwhile;?>
	</div>
</section>

<script>
	jQuery(document).ready(function(){
		$('#container').imagesLoaded( function() {
			$container = $('.grid');
			$container.isotope({
			  // options
			  itemSelector: '.grid-item',
			  layoutMode: 'masonry'
			});
		});
		$('.filter-group').on( 'click', 'li,h4', function() {
		  var filterValue = $(this).attr('data-filter');
		  $container.isotope({ filter: filterValue });
		});

		// $("#container").stalactite({
		// duration: 75,                        // Duration of animation.
		// easing: 'swing',                      // Easing method.
		// cssPrefix: '.stalactite',             // The css naming convention.
		// cssPrep: true,                        // Should stalactite structurally modify css of children?
		// fluid: true,                          // Should stalactite recalculate on window resize?
		// // loader: '<img />',                    // The contents of the loader. Defaults to a dataURL animated gif.
		// styles: {},                            // A style object to place on the child elements
		// complete: function(v) {

		// }  // Callback function
		// });

	});
</script>


<?php get_footer(); ?>
