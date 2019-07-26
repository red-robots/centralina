<?php 
/**
* Template Name: Calendar Page
*/
 get_header(); ?>






<div id="main-wrapper">

<div id="main">



<div class="page-content">







     <h1><?php the_title(); ?></h1>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
     <?php the_content(); ?>
     
    



     
<?php endwhile; endif; ?>   

<div id="home-row3" style="margin-top: 20px;">
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