<?php
/**
 * Displays a Single Events Post
 */

get_header(); ?>

	


<div id="main-wrapper">

<div id="main">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="page-content">



<div id="right-sidebar"><div id="right-sidebar-padding">
<h2>Upcoming Events</h2>
<!-- -->

<ul>
<?php
    // today's date
    $today = date("Ymd"); 
	// today's year
    $tYear = date("Y"); 
	// set the variable previous month to empty
	$prevMonth = '';
    // set your counter for showing "Past Events" title below
    $counter = 0;
    // New query
    $wp_query = new WP_Query();
    // Start query
    $wp_query->query(array(
    'post_type'=>'events', // post type name
    'posts_per_page' => -1,
    'paged' => $paged,
    'meta_key' => 'event_date', // your date pickers name
    'orderby' => 'meta_value',
    'order' => 'DESC',
));
    if ($wp_query->have_posts()) : ?>
    
    <?php while ($wp_query->have_posts()) :  $wp_query->the_post(); 
    
    // your date pickers field name
    $eventdate = DateTime::createFromFormat('Ymd', get_field('event_date'));
	// get the events year
	$eYear = $eventdate->format('Y');
    // Get the events month
	$month = $eventdate->format('m');
	// convert to string
	//$month += strval($month); 
	// convert the month number to a name
	//echo $month;
	if( $month == '01') {
		$monthName = 'January';
	} elseif ($month == '02') {
		$monthName = 'February';
	} elseif ($month == '03') {
		$monthName = 'March';
	} elseif ($month == '04') {
		$monthName = 'April';
	} elseif ($month == '05') {
		$monthName = 'May';
	} elseif ($month == '06') {
		$monthName = 'June';
	} elseif ($month == '07') {
		$monthName = 'July';
	} elseif ($month == '08') {
		$monthName = 'August';
	} elseif ($month == '09') {
		$monthName = 'September';
	} elseif ($month == '10') {
		$monthName = 'October';
	} elseif ($month == '11') {
		$monthName = 'November';
	} elseif ($month == '12') {
		$monthName = 'December';
	} else {
		$monthName = '';
	}
    ?>


    <?php 
    // if event dates are greater than today's date, show them here.
    if( $eventdate->format('Ymd') >= $today ) : ?>
    
<li><?php if (strlen(get_post_meta($post->ID, "date_range", true)) > 0) : ?>
<br><?php the_field("date_range"); ?>   

<?php else : ?> 
 <div class="thedate"><?php echo $eventdate->format('F j, Y'); ?></div>
<?php endif; ?>
<h3 style="margin-top: 0px;"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
        
        
        
</li>   
        
        

    
    <?php endif; // end the if statement ?>

    <?php endwhile; // end while_have posts ?>
    
 </ul>   
    <?php endif; // end have_posts loop query ?>
        
 <?php wp_reset_query(); ?>


<!-- -->
</div></div>

<h1><?php the_title(); ?></h1>


  
          <!-- blog featured image  -->
        
        
 		<?php the_content(); ?>
        


        
</div><!-- single post container -->






<?php endwhile; endif; ?>

<?php get_footer(); ?>