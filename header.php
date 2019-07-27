<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=9">
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('template_url'); ?>/colorbox.css" />
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Archivo+Narrow:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Domine:400,700' rel='stylesheet' type='text/css'>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>



<?php wp_head(); ?>




<!-- mobile nav -->

<script type="text/javascript" language="JavaScript"><!--
function HideContent(d) {
document.getElementById(d).style.display = "none";
}
function ShowContent(d) {
document.getElementById(d).style.display = "block";
}
function ReverseDisplay(d) {
if(document.getElementById(d).style.display == "none") { document.getElementById(d).style.display = "block"; }
else { document.getElementById(d).style.display = "none"; }
}
//--></script>

<!-- mobile nav -->

<!-- sticky nav -->

<script type="text/javascript">
$(window).scroll(function() {
    if ($(this).scrollTop() > 195) { //I just used 200 for testing
        //$("#tester").css({ "position": "fixed", "top": 0 });
      $("body").addClass('stickyNav');
    } else {
      $("body").removeClass('stickyNav');
        //$("#tester").css({ "position": "absolute", "top": "195px" }); //same here
    }   			
});
</script>


<!-- sticky nav -->


<?php the_field('google_analytics', 'option'); ?>

</head>

<body>



<div id="main-wrapper">


<div id="donate"><a href="<?php bloginfo('url'); ?>/donate"><img src="<?php bloginfo('template_url'); ?>/images/donate.png" alt="" border="0">Why?</a></div>

<div id="main">
<div id="main2">


<!-- volunteer button -->
<div id="main-header-wrapper">
<div id="main-header">




<div id="header">
    <div id="logo">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/centralina-logo.png" alt="" border="0"></a> 
    </div><!-- #logo -->
    
<div id="header-content-wrapper">
<div id="header-content">

<div id="header-content1">




<div id="site-search"> <!-- --> 
 <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
<div><input name="s" type="text" id="s" placeholder="enter search terms here" value="<?php echo wp_specialchars($s, 1); ?>" size="15" />
<input type="submit" id="searchsubmit" value="go" class="btn" />
</div>
</form><div id="site-search-text">Site Search</div>
  <!-- --></div>
  <div id="social-icons"><a href="<?php the_field('facebook', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-facebook.png" alt="" border="0"></a>
<a href="<?php the_field('twitter', 'option'); ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/icon-twitter.png" alt="" border="0"></a></div>
  <div id="header-content1-text">Charlotte, NC & Surrounding Counties</div>

</div>

<div id="header-text">
<div id="header-text1">Aging in Action</div>
Serving as a leader to impact communities where adults age with choice, dignity and independence.
</div>

<div id="header-menu">
<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'secondary' ) ); ?>
</div>











</div>
</div>
    
    
    </div>
    
<div id="tester"><div id="navigation">
            
      <nav id="access" role="navigation">
				<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
			</nav>
            </div>
</div>
            
    </div><!-- #main header -->
 </div>   

<div id="mobile-navigation">

<a class="menuBtn" href="javascript:ReverseDisplay('uniquename')"> 
MENU &nbsp;&nbsp;&nbsp; <img src="<?php bloginfo('template_url'); ?>/images/down-arrow.png" alt="" border="0">
</a>

<div id="uniquename" style="display:none;">
<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assigned to the primary location is the one used. If one isn't assigned, the menu with the lowest ID is used. */ ?>
				<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>    
            
</div>

      
    </div><!-- #navigation -->