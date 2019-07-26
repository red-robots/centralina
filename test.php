<?php 
// Category Page 'category.php'
if ( have_posts() ) : ?>

<!-- h1 will print the Category's name you're searching -->			
<h1><?php printf( __( 'Category Archives: %s', 'twentytwelve' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
<?php
	/* Start the Loop 
	
		Number of posts on a category page, 
		before it paginates, will be determined 
		by the WordPress Admin in Settings > Reading
	
	*/
	
	while ( have_posts() ) : the_post(); ?>
    
    <div class="post">
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
    </div><!-- post -->
    

<?php endwhile;?>

    <div class="clear"></div>
    <?php pagi_posts_nav(); ?>
    
<?php endif; ?>