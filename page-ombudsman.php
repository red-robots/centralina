<?php 
/**
* Template Name: Ombudsman Page
*/
 get_header(); ?>




<?php while ( have_posts() ) : the_post();
$pageContent = get_the_content();
$pageTitle = get_the_title(); 
$resources = get_field("resources"); ?>

<?php endwhile; ?>





<div id="main-wrapper">

<div id="main">



<div class="page-content-falls">





<div id="left-sidebar">

<div id="left-sidebar-subnav">


<?php if( is_child(7) ): ?>

<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
<?php wp_nav_menu( array( 'theme_location' => 'sub2' ) ); ?>

<?php elseif( is_child(9) ): ?>

<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
<?php wp_nav_menu( array( 'theme_location' => 'sub3' ) ); ?>

<?php elseif( is_child(11) ): ?>

<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
<?php wp_nav_menu( array( 'theme_location' => 'sub4' ) ); ?>

<?php elseif( is_child(13) ): ?>

<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
<?php wp_nav_menu( array( 'theme_location' => 'sub5' ) ); ?>

<?php endif; ?>

  


</div>

<!-- -->
<?php
/*
*  Loop through post objects ( don't setup postdata )
*  Using this method, the $post object is never changed so all functions need a second parameter of the post ID in question.
*/
$posts = get_field('select_staff');
if( $posts ): ?>

<div id="left-sidebar-callout">
<div id="left-sidebar-callout-padding">
 <?php foreach( $posts as $post_object): ?>
<div class="staff-photo"><?php if(get_field("photo", $post_object->ID)!='') : ?>
<?php
$image = get_field('photo',$post_object->ID);
  $image = get_field('photo',$post_object->ID);
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'staff';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>
        <?php endif; ?></div>
 <h2><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a></h2>
 
<?php echo the_field('title',$post_object->ID); ?> 

 <div class="staff-callout-email">
 <img src="<?php bloginfo('template_url'); ?>/images/icon-email.png" alt="" border="0">
 <br>
<a href="mailto:<?php echo the_field('email',$post_object->ID); ?>"><?php echo the_field('email',$post_object->ID); ?> </a>
 </div>

 <?php endforeach; ?>

</div>
</div>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?> 

<!-- -->

<div id="left-sidebar-calendar">
<div id="left-sidebar-calendar-padding">
<a href="<?php the_field("calendar_link_url"); ?>"><?php the_field("calendar_link_title"); ?></a>
</div>
</div>


</div>

<div id="page-content-text">
<h1><?php echo $pageTitle; ?></h1>
     <?php the_content(); ?>
     
<div id="ombudsman-staff">
<!-- -->
<?php
/*
*  Loop through post objects ( don't setup postdata )
*  Using this method, the $post object is never changed so all functions need a second parameter of the post ID in question.
*/
$posts = get_field('select_staff_horizontal');
if( $posts ): ?>

 <?php foreach( $posts as $post_object): ?>
 <div class="ombudsman-staff-single">
<div class="staff-photo"><?php if(get_field("photo", $post_object->ID)!='') : ?>
<?php
$image = get_field('photo',$post_object->ID);
  $image = get_field('photo',$post_object->ID);
  $url = $image['url'];
  $title = $image['title'];
  $alt = $image['alt'];
  $caption = $image['caption'];
 
  // thumbnail or custom size that will go
  // into the "thumb" variable.
  $size = 'staff';
  $thumb = $image['sizes'][ $size ];
  $width = $image['sizes'][ $size . '-width' ];
  $height = $image['sizes'][ $size . '-height' ];
if( !empty($image) ): ?>
	<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" />
<?php endif; ?>
        <?php endif; ?></div>
 <h2><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a></h2>
 
<?php echo the_field('title',$post_object->ID); ?> 

 <div class="staff-callout-email">
 <img src="<?php bloginfo('template_url'); ?>/images/icon-email.png" alt="" border="0">
 <br>
<a href="mailto:<?php echo the_field('email',$post_object->ID); ?>"><?php echo the_field('email',$post_object->ID); ?> </a>
 </div>
</div>
 <?php endforeach; ?>

<?php endif; ?>
<?php wp_reset_query(); ?>
<?php wp_reset_postdata(); ?> 

<!-- -->
</div>
</div>

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
<?php the_field("resources"); ?>

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


</div><!-- / page content -->





<?php get_footer(); ?>