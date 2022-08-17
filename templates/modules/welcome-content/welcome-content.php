<?php 

$section['title'] = $section['title'] ?? "This is the title that goes in the landing page";
$section['description'] = $section['description'] ?? "A few words or phrase that goes under the title";

?>

<!-- module -->

<welcome-content>
	<h1 class="loud-voice"><?=$section['title']?></h1>
	
	<p><?=$section['description']?></p>
</welcome-content>
