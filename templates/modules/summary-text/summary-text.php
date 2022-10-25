<?php 

$section['title'] = $section['title'] ?? "Name of the person this resume belongs to";
$section['job'] = $section['job'] ?? "Their job title goes here";
$section['summary'] = $section['summary'] ?? "This is a small summary of what they want the hiring person to see about them, highlighting things to stand out.";
$section['class'] = $section['class'] ?? "";
$section['voice-one'] = $section['voice-one'] ?? "";
$section['voice-two'] = $section['voice-two'] ?? "";
$section['voice-three'] = $section['voice-three'] ?? "";

?>
<summary-text class="<?=$section['class']?>">
	<h1 class="<?=$section['voice-one']?>"><?=$section['title']?></h1>
	<h2 class="<?=$section['voice-two']?>"><?=$section['job']?></h2>
	<p class="<?=$section['voice-three']?>"><?=$section['summary']?></p>
</summary-text>

