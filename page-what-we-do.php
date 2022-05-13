<?php 
/**
* Template Name: Landing Page
*/
 get_header(); ?>






<div id="main-wrapper" class="page-id-<?php echo get_the_ID();?>">

<div id="main">



<div class="page-content clear">







     <h1><?php the_title(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <?php the_content(); ?>
     
  

</div><!-- / page content -->
   
<div class="container">
 <div id="landing-boxes">
 
     <?php if(get_field('child_pages')): ?>      	
    <?php while(has_sub_field('child_pages')): ?>




    <?php if(is_page( 'How You Can Help' ) ) { ?>

    <div class="page-link-box">
    <div class="page-link-box-padding">
    <!-- -->
    <?php
    $post_object = get_sub_field('page');
    if($post_object) :
        $post = $post_object;
        // Overwrite $post
        setup_postdata( $post ); ?>
    <h2 class="no-margin"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        // Reset $post so the rest of the page works
        wp_reset_postdata();
    endif; ?>
    <!-- -->

    <div class="page-link-box-photo-wrapper">
    <div class="page-link-box-photo">
    <?php 
    $image = get_sub_field('icon');
    if( !empty($image) ): ?>
    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
    <?php endif; ?>
    </div>      
                <?php } else { ?>
                
    <div class="page-link-box">
    <div class="page-link-box-padding clear">
    <!-- -->
    <?php
    $post_object = get_sub_field('page');
    if($post_object) :
        $post = $post_object;
        // Overwrite $post
        setup_postdata( $post ); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php
        // Reset $post so the rest of the page works
        wp_reset_postdata();
    endif; ?>
    <!-- -->            
                
                <div class="page-link-box-text"><?php the_sub_field("introductory_text"); ?>



    </div>
    <div class="page-link-box-icon-wrapper">
    <div class="page-link-box-icon">
    <?php 
    $image = get_sub_field('icon');
    if( !empty($image) ): ?>
    	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
    <?php endif; ?>
    </div>
                <?php } ?>


    </div>
    <div class="page-link-learn-more"><?php
    $post_object = get_sub_field('page');
    if($post_object) :
        $post = $post_object;
        // Overwrite $post
        setup_postdata( $post ); ?>
    <a href="<?php the_permalink(); ?>">Learn More</a><?php
        // Reset $post so the rest of the page works
        wp_reset_postdata();
    endif; ?></div>
    </div>
    </div>
    <?php endwhile; endif; ?>
 
 </div>   
</div>


     
<?php endwhile; endif; ?>   

<div id="home-row3" style="margin-top: 20px;">
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
        	'meta_query'=> array(
                'relation'=> 'OR',
                array(
                    'key'=> 'event_date',
                    'compare'=>'NOT EXISTS'
                ),
                array(
                    'key'=>'event_date',
                    'value'=>NULL,
                    'compare'=>'='
                ),
                array(
                    'key'=>'event_date',
                    'value'=>date( "Ymd" ),
                    'compare'=>'>=',
                    'type'=>'NUMERIC'
                ),
                array(
                    'key'=>'end_date',
                    'value'=>date( "Ymd" ),
                    'compare'=>'>=',
                    'type'=>'NUMERIC'
                )
            ));
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
        

</ul><div id="see-more-link"><a href="<?php bloginfo('url'); ?>/educational-opportunities/"><img src="<?php bloginfo('template_url'); ?>/images/see-more.png" alt="" border="0"></a> <div class="see-more-link-text"><a href="<?php bloginfo('url'); ?>/educational-opportunities/">See More</a></div></div>
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





<?php get_footer(); ?>