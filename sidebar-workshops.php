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
<div id="left-sidebar" class="sidebarNavs">
	<div id="left-sidebar-subnav">
		<?php wp_nav_menu( array( 'menu' => 15,'menu_id'=>'wellness' ) ); ?>
	</div>
</div>
<?php } ?>