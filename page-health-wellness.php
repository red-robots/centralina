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
     			<div class="entry-content"><?php the_content(); ?></div>
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
					$logo = get_field('workshop_logo');
					$content = get_field('workshop_description');
					$content = ($content) ? strip_shortcodes( strip_tags($content) ) : '';
					$short_description = ($content) ? shortenText($content,100,".","...") : '';
					$px = get_bloginfo('template_url') . '/images/square.png';
					$secondary_title = get_field('secondary_title');
					?>
					<div class="fbox">
						<div class="inside clear">
							<?php if ($logo) { ?>
							<div class="workshoplogo clear">
								<span class="imgwrap"><span style="background-image:url('<?php echo $logo['url']?>')"><img src="<?php echo $px; ?>" alt="" /></span></span>
							</div>		
							<?php } ?>
							<div class="titlewrap">
								<h2 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
								<?php if ($secondary_title) { ?>
								<div class="subtitle"><?php echo $secondary_title ?></div>
								<?php } ?>
							</div>

							<div class="morebtn">
								<a href="<?php echo get_permalink(); ?>">Learn More</a>
							</div>
							
						</div>
					</div>
				<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>	
			<?php } ?>

			<?php $bottom_section = get_field('bottom_section'); ?>
			<?php if ($bottom_section) { ?>
				<div class="container">
					<div class="hw-bottom clear">
					<?php echo $bottom_section; ?>
				</div>
			</div>	
			<?php } ?>
		</div>
	</div>
	<?php endwhile; ?>
<?php get_footer(); ?>