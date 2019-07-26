<?php
/**
 * Displays a Single Post
 */

get_header(); ?>

	


<div id="main-wrapper">

<div id="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="single-post-container">

<h1><?php the_title(); ?></h1>
<h2><?php the_date(); ?></h2>

  
          <!-- blog featured image  -->
        
        
 		<?php the_content(); ?>
        

        
<div class="post-boxes"><?php previous_post(); ?></div>

<div class="post-boxes"><?php next_post(); ?></div>
        
</div><!-- single post container -->






<?php endwhile; endif; ?>

<?php get_footer(); ?>