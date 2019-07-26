<?php 
/*
 * Template Name: Health & Wellness
 */
get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<div id="main-wrapper">
		<div id="main" class="main-content">
			<div class="container">
     			<h1 class="pagetitle"><?php the_title(); ?></h1>
     			<?php if(get_the_content()) { ?>
     			<div class="entry-content"><?php //the_content(); ?></div>
     			<?php } ?>
     		</div>

			<?php  
			$args = array(
			    'posts_per_page'   => -1,
			    'post_type'        => 'workshops',
			    'post_status'      => 'publish'
			);
			$items = new WP_Query($args);
			if ( $items->have_posts() ) { ?>
			<div class="container workshop-list">
				<div class="flexrow clear">
				<?php while ( $items->have_posts() ) : $items->the_post(); 
					$content = get_field('workshop_description');
					$content = ($content) ? strip_shortcodes( strip_tags($content) ) : '';
					$short_description = ($content) ? shortenText($content,150,".","...") : '';
					?>
					<div class="fbox">
						<h2 class="title"><?php the_title(); ?></h2>
						<div class="description"><?php echo $short_description; ?></div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>	
			<?php } ?>

		</div>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>