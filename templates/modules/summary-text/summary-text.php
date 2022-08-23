<?php 

$section['title'] = $section['title'] ?? "Name of the person this resume belongs to";
$section['job'] = $section['job'] ?? "Their job title goes here";
$section['summary'] = $section['summary'] ?? "This is a small summary of what they want the hiring person to see about them, highlighting things to stand out.";

?>
<summary-text>
	<h1 class="exciting-voice"><?=$section['title']?></h1>
	<h2 class="attention-voice"><?=$section['job']?></h2>
	<p class="calm-voice"><?=$section['summary']?></p>
</summary-text>

