<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

 get_header(); ?>

 <?php get_template_part( 'parts/featured-image' ); ?>

 <div id="page" role="main">

 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <header>
           <h1 class="entry-title"><?php the_title(); ?></h1>
       </header>
       <div class="entry-content">
           <?php the_content(); ?>
       </div>
   </article>
 <?php endwhile;?>

 <?php get_sidebar(); ?>

 </div>

 <?php get_footer(); ?>
