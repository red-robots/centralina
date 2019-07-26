<?php 
/**
* Template Name: Home Page
*/
 get_header(); ?>







<div id="main-wrapper">

<div id="main">



<div class="page-content">





<div id="left-sidebar">

<div id="left-sidebar-subnav">
<?php
  if($post->post_parent)
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  else
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  if ($children) { ?>
  <ul>
  <?php echo $children; ?>
  </ul>
  <?php } ?>
</div>

<?php $callout = get_field("left_sidebar_callout"); ?>
<?php if($callout):?>
<div id="left-sidebar-callout">
<div id="left-sidebar-callout-padding">
	<?php echo $callout;?>
</div>
</div>
<?php endif;?>

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

     <h1><?php the_title(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <?php the_content(); ?>
     
    



     
<?php endwhile; endif; ?>   

<div id="home-row3">
<div id="home-row3-content">

<div id="quicklinks">

<h2>Quicklinks</h2>

<div id="quicklinks-content">

<?php $recent = new WP_Query("page_id=39"); while($recent->have_posts()) : $recent->the_post();?>

<?php the_field("quicklinks"); ?>
<?php endwhile; wp_reset_postdata(); // end of the loop. ?>

</div>

</div>

<div id="latest-news-feed">
<h2>News & Announcements</h2>
<ul>
<?php
query_posts('posts_per_page=3');
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

<li>
 <?php the_date(); ?>
 <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
</li>

<?php endwhile; endif; ?>
</ul>
<a name="latest-news"></a>
</div>

</div>
</div>  


</div><!-- / page content -->





<?php get_footer(); ?>