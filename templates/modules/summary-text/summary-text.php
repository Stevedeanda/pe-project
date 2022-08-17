<?php 

$section['title'] = $section['title'] ?? "Name of the person this resume belongs to";
$section['job'] = $section['job'] ?? "Their job title goes here";
$section['summary'] = $section['summary'] ?? "This is a small summary of what they want the hiring person to see about them, highlighting things to stand out.";

?>
<summary-text>
	<h1 class="loud-voice"><?=$section['title']?></h1>
	<h2><?=$section['job']?></h2>
	<p><?=$section['summary']?></p>
</summary-text>

