<!-- module -->

<?php 
	
	// This set up a default response incase the module doesn't have a title or descripiton. It will use the default messages I just put in side here. The ?? means or. If no pageTitle then use what is in the quotes. 
	$section['title'] = $section['title'] ?? "This is where the title goes";
	$section['description'] = $section['description'] ?? "A small description of what this section is going to be.";

?>


		<page-header>
			<h2 class="loud-voice"><?=$section['title']?></h2>
			
			<p><?=$section['description']?></p>
		</page-header>

	

