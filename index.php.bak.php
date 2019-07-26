<?php get_header(); ?>




<div id="home-wrapper">

<div id="home-row1">
<div id="home-row1-content">
<div id="home-row1-box">
<!-- home slider -->

<div id="home-slider">
<?php 
// Query the Post type Slides
$querySlides = array(
	'post_type' => 'slides',
	'posts_per_page' => '-1'
);
// The Query
$the_query = new WP_Query( $querySlides );
?>
<?php 
// The Loop
 if ( $the_query->have_posts()) : ?>

<div class="flexslider">
        <ul class="slides">
        <?php while ( $the_query->have_posts() ) : ?>
			<?php $the_query->the_post(); ?>
            
            <li> 
            <?php
			 // check if the post has a Post Thumbnail assigned to it.
if ( has_post_thumbnail() ) {
	the_post_thumbnail();
} 
?>

<div class="project-box">

<?php the_content(); ?>
</div>         

<div class="project-image">

<?php 
$image = get_field('slide_image');
if( !empty($image) ): ?>
    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> 
<?php endif; ?>

</div>  
            
                
            </li>
            
           <?php endwhile; ?>
      	 </ul><!-- slides -->
</div><!-- .flexslider -->

 

         <?php endif; // end loop ?>
        
    <?php wp_reset_postdata(); ?>
    
</div>


<!-- / home slider -->
</div>



</div>





</div><!-- home row1 -->


<div id="home-row2">
<div id="home-row2-content">

<div id="home-box1">
<h2><a href="#">Upcoming Events</a></h2>



</div>

<div id="home-box2">
<h2><a href="#">Volunteers</a></h2>
<div class="home-box-text">Short introductory Text giving people a concise idea of what this is.<p>
More text or a small image/graphic.
</div>
<div class="home-box-learn-more" id="home-box2-learn-more"><a href="#">Learn More</a></div>
</div>

<div id="home-box3">
<h2><a href="#">Programs & Services</a></h2>
<div class="home-box-learn-more" id="home-box3-learn-more"><a href="#">Learn More</a></div>
</div>

<div id="home-box4">
<h2><a href="#">Health & Wellness
Classes</a></h2>
<div class="home-box-learn-more" id="home-box4-learn-more"><a href="#">Learn More</a></div>
</div>


</div>
</div><!-- home row2 -->


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
</div><!-- home row2 -->

</div>




<a href="https://plus.google.com/104177206931999535082" rel="publisher"></a>


<?php get_footer(); ?>