<?php 
/**
* Template Name: Staff Page
*/
 get_header(); ?>


<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


<div class="page-content">
      <h1><?php the_title(); ?></h1>
     <?php the_content(); ?><?php endwhile; endif; ?>
     
     
     
     
     <!-- custom post feed -->
<?php
//echo $postid;
	$wp_query = new WP_Query();
	$wp_query->query(array(
	'post_type'=>'staff',
	'posts_per_page' => -1,
	'post__not_in' => array($postid)
));

	if ($wp_query->have_posts()) : ?>

    <?php while ($wp_query->have_posts()) : ?>

        

    <?php $wp_query->the_post(); ?>
  
      	<div class="staff">
        
<div class="staff-photo"><?php
$image = get_field('photo');
  $image = get_field('photo');
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
<?php endif; ?></div>        
        
 <div class="staff-text">
        <h3><?php the_title(); ?> - <?php the_field("title"); ?></h3>
     
        
<?php the_content(); ?>

<?php the_field("phone"); ?> (phone)
<br><a href="mailto:<?php echo the_field('email',$post_object->ID); ?>"><?php echo the_field('email',$post_object->ID); ?> </a> (email)
        
        </div>
 </div>      	
    	<?php  endwhile; endif; wp_reset_postdata();  // close loop and reset the query ?>

 
 <!-- / custom post feed -->    
 </div><!-- / page content -->




<?php //get_sidebar(); ?>
<?php get_footer(); ?>