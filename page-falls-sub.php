<?php 
/**
* Template Name: Metrolina Falls Prevention Page
*/
 ?>

<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />

<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>



<?php wp_head(); ?>




<!-- mobile nav -->

<script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//--></script>

<!-- mobile nav -->

<!-- sticky nav -->

<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 195) { //I just used 200 for testing
        $("#tester").css({ "position": "fixed", "top": 0 });
    } else {
        $("#tester").css({ "position": "absolute", "top": "195px" }); //same here
    }   			
});
</script>


<!-- sticky nav -->


<?php the_field('google_analytics', 'option'); ?>

</head>

<body>



<div id="main-wrapper">


<div id="donate"><a href="<?php bloginfo('url'); ?>/donate"><img src="<?php bloginfo('template_url'); ?>/images/donate.png" alt="" border="0">Why?</a></div>

<div id="main">
<div id="main2">


<!-- volunteer button -->
<div id="main-header-wrapper">
<div id="main-header">




<div id="header">


<div id="logo">
    <a href="<?php bloginfo('url'); ?>/metrolina-falls-prevention/"><img src="<?php bloginfo('template_url'); ?>/images/metrolina-falls-prevention-logo.png" alt="" border="0"></a> 
    </div><!-- #logo -->


    
    
<div id="header-content-wrapper">
<div id="header-content">

<div id="header-content1">




<div id="site-search"> <!-- --> 

<div class="falls-button"><a href="#">become a member!</a></div><div class="falls-button"><a href="#">request a speaker!</a></div>

  <!-- --></div>
  <div id="social-icons"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.png" alt="" border="0"></a>
<a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.png" alt="" border="0"></a></div>






</div>




<div id="header-text">
<div id="header-text1">Metrolina Falls Prevention Coalition</div>
Working in collaboration to help adults maintain independence and enhance their quality of life by reducing falls & falls related to injuries.
</div>   





<div id="header-menu">


<div id="small-logo">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/centralina-logo.png" alt="" border="0"></a> 
    <br><a href="<?php bloginfo('url'); ?>">Return to Centralina AAA ></a>
    </div><!-- #logo -->




</div>











</div>
</div>
    
    
    </div>
    
<div id="tester">


<div id="navigation-falls">
            
      <nav id="access" role="navigation">
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'falls' ) ); ?>
			</nav>
            </div>






</div>
            
    </div><!-- #main header -->
 </div>   

<div id="mobile-navigation">

<a href="javascript:ReverseDisplay('uniquename')"> 
MENU &nbsp;&nbsp;&nbsp; <img src="<?php bloginfo('template_url'); ?>/images/down-arrow.png" alt="" border="0">
</a>

<div id="uniquename" style="display:none;">
<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'falls' ) ); ?>    
            
</div>

      
    </div><!-- #navigation -->
    

<!-- end header ------ -->



<?php while ( have_posts() ) : the_post();
$pageContent = get_the_content();
$pageTitle = get_the_title(); 
$resources = get_field("resources"); ?>

<?php endwhile; ?>





<div id="main-wrapper">

<div id="main">



<div class="page-content">





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

<h1><?php echo $pageTitle; ?></h1>
     <?php the_content(); ?>



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
<h2>Resources</h2>
<?php echo $resources; ?>
</div>

</div>
</div>  


</div><!-- / page content -->





<?php get_footer(); ?>