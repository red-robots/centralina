<?php get_header(); ?>
<div id="main-wrapper">
	<div class="container main">
		<div class="content-wrapper">
			<?php get_sidebar('workshops'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php 
						$logo = get_field('workshop_logo'); 
						$description = get_field('workshop_description'); 
						$secondary_title = get_field('secondary_title');
					?>
					<div id="page-content-text">
						<div class="entry-header">
							<h1 class="pagetitle"><?php the_title(); ?></h1>
							<?php if ($secondary_title) { ?>
							<div class="subtitle"><?php echo $secondary_title ?></div>	
							<?php } ?>
						</div>
						

						<div class="ws-description <?php echo ($logo) ? 'half':'full'?>">
							<?php echo $description ?>
						</div>
						<?php if ($logo) { ?>
						<div class="ws-logo"><img src="<?php echo $logo['url'] ?>" alt="<?php echo $logo['title'] ?>" /></div>
						<?php } ?>
					</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>