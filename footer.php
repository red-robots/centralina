</div> <!-- main -->
</div> <!-- main -->
</div>

</div>
</div>





<div id="footer">



<div id="footer2-wrapper">

<div id="footer2-column1">

<div id="footer-line1"><p><img src="<?php bloginfo('template_url'); ?>/images/icon-map.png" alt="" border="0" class="icon-map"> <?php $address = get_field("address","option"); if($address) echo $address;?> <img src="<?php bloginfo('template_url'); ?>/images/icon-phone.png" alt="" border="0" class="icon-map"> <a href="tel:7043722416">704-372-2416</a> &nbsp;&nbsp; Toll-free: <a href="tel:18005085777">1-800-508-5777</a></p></div>

Copyright Centralina Area Agency on Aging, 2016. All rights reserved.  | Equal Opportunity/Affirmative Action Employer. 
</div>


	

<div id="footer2-right">

<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a> &nbsp; | &nbsp; site by <a href="http://www.bellaworksweb.com" target="_blank">Bellaworks</a>

</div>


</div>
</div>
	

<!-- sticky nav -->

<script type="text/javascript">
jQuery(document).ready(function($) {
	$(window).scroll(function() {
	    if ($(this).scrollTop() > 300) { 
	      $("body").addClass('stickyNav');
	    } else {
	      $("body").removeClass('stickyNav');
	    }   			
	});
});
</script>


<!-- sticky nav -->

<?php wp_footer(); ?>

</body>
</html>