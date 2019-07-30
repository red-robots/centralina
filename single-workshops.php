<?php get_header(); ?>
<div id="main-wrapper">
	<div class="container main">
		<div class="content-wrapper">
			<?php get_sidebar('workshops'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
					<?php 
						$logo = get_field('workshop_logo'); 
						$description = get_field('workshop_description'); 
					?>
					<div id="page-content-text">
						<h1 class="pagetitle"><?php the_title(); ?></h1>
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