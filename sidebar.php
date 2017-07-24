<div id="archive-filters">
<?php
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];

	if (strpos($url,'672') !== false) :
    	
    	echo do_shortcode('[searchandfilter id="680"]');
    else :
    	echo do_shortcode('[searchandfilter id="672"]');
    endif;
?>
</div>