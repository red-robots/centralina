<?php
global $post;
$pageId = (isset($post->ID)) ? $post->ID : 0;   
$args = array(
    'posts_per_page'   => -1,
    'post_type'        => 'workshops',
    'post_status'      => 'publish'
);
$items = new WP_Query($args);
if($items) { ?>
<div id="left-sidebar">
	<div id="left-sidebar-subnav">
		<ul>
			<?php while ( $items->have_posts() ) : $items->the_post();  
			$id = get_the_ID(); 
			$is_active = ($id==$pageId) ? ' active':''; ?>
			<li class="sb-item<?php echo $is_active?>"><a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a></li>	
			<?php endwhile; wp_reset_postdata(); ?>
		</ul>
	</div>
</div>
<?php } ?>