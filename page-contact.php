<?php 
/**
* Template Name: Contact Us Page
*/
 get_header(); ?>


<?php while ( have_posts() ) : the_post();
$pageContent = get_the_content();
$pageTitle = get_the_title(); 
$resources = get_field("resources"); ?>

<?php endwhile; ?>





<div id="main-wrapper">

<div id="main">



<div class="page-content">


<div id="content-left">
<h1><?php the_title(); ?></h1>
     <?php the_content(); ?>
</div>

<div id="google-map">
<?php the_field("google_map"); ?>
</div>


  


</div><!-- / page content -->
<div id="home-row3">
<div id="home-row3-content">

<div id="upcoming-events-wrapper">
<div id="left-sidebar-events">
<div id="left-sidebar-events-padding">
<h2>Upcoming Events</h2>

<div id="left-sidebar-events-feed">
<?php /* Second Custom Query pulling the post type, "Newsletters" */  
       	$args = array( 
        	'post_type' => array('events'), // In an array so You can list multiple Custom Post Types if you want ('blog', 'another_post_type')
        	'posts_per_page' => '3', // # of posts to show use -1 for all posts.	
        	);
        	$query = new WP_Query( $args );  // Query all of your arguments from above
       	?><ul>
       	<?php if (have_posts()) : while( $query->have_posts() ) : $query->the_post(); // the loop ?>
  
      	<li><?php 
	if(get_field('event_date'))
		{
			$date = DateTime::createFromFormat('Ymd', get_field('event_date'));
			echo $date->format('F j, Y');
		}	 	 			 	 
?><?php if (strlen(get_post_meta($post->ID, "end_date", true)) > 0) : ?> - <?php 
	if(get_field('end_date'))
		{
			$date = DateTime::createFromFormat('Ymd', get_field('end_date'));
			echo $date->format('F j, Y');
		}	 	 			 	 
?><?php endif; ?><br><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
       	
    	<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>
        

</ul><div id="see-more-link"><a href="<?php bloginfo('url'); ?>/educational-opportunities/events/"><img src="<?php bloginfo('template_url'); ?>/images/see-more.png" alt="" border="0"></a> <div class="see-more-link-text"><a href="<?php bloginfo('url'); ?>/educational-opportunities/events/">See More</a></div></div>
</div>
</div>
</div>
</div>

<div id="latest-news-feed">

<?php if (strlen(get_post_meta($post->ID, "resources", true)) > 0) : ?>
<h2>Resources</h2>
<?php echo $resources; ?>

<?php else : ?> 

<div id="quicklinks">

<h2>Quicklinks</h2>

<div id="quicklinks-content">

<?php $recent = new WP_Query("page_id=166"); while($recent->have_posts()) : $recent->the_post();?>

<?php the_field("quicklinks"); ?>
<?php endwhile; wp_reset_postdata(); // end of the loop. ?>

</div>

</div>
<?php endif; ?>


</div>

</div>
</div>




<?php get_footer(); ?>