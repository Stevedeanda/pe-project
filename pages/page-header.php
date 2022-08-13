<!-- module -->

<?php 
	
	// This set up a default response incase the module doesn't have a title or descripiton. It will use the default messages I just put in side here. The ?? means or. If no pageTitle then use what is in the quotes. 
	$pageTitle = $pageTitle ?? "Working on the title";
	$pageDescription = $pageDescription ?? "Description coming soon.";

?>

<header class='page-header'>
	<inner-column>
		<h1 class="loud-voice"><?=$pageTitle?></h1>
		
		<p><?=$pageDescription?></p>
	</inner-column>
</header>
	

