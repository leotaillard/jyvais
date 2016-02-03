<?php
/*
Template Name: Front
*/
get_header(); ?>

<section class="intro" role="main">
<?php while ( have_posts() ) : the_post(); ?>
	<div id="container" class="row small-up-1 medium-up-2 large-up-4">
	        <div class="column">
	          <img src="//placehold.it/400x122" class="thumbnail" alt="">
	        </div>
	        <div class="column">
	          <img src="//placehold.it/500x431" class="thumbnail" alt="">
	        </div>
	        <div class="column">
	          <img src="//placehold.it/440x323" class="thumbnail" alt="">
	        </div>
	        <div class="column">
	          <img src="//placehold.it/300x300" class="thumbnail" alt="">
	        </div>
	        <div class="column">
	          <img src="//placehold.it/300x300" class="thumbnail" alt="">
	        </div>
	        <div class="column">
	          <img src="//placehold.it/300x300" class="thumbnail" alt="">
	        </div>
	</div>
<?php endwhile;?>
</section>

<script>
	jQuery(document).ready(function(){
		$("#container").stalactite({
		duration: 75,                        // Duration of animation.
		easing: 'swing',                      // Easing method.
		cssPrefix: '.stalactite',             // The css naming convention.
		cssPrep: true,                        // Should stalactite structurally modify css of children?
		fluid: true,                          // Should stalactite recalculate on window resize?
		// loader: '<img />',                    // The contents of the loader. Defaults to a dataURL animated gif.
		styles: {},                            // A style object to place on the child elements
		complete: function(v) { return v; }  // Callback function
		});

	});
</script>


<?php get_footer(); ?>
