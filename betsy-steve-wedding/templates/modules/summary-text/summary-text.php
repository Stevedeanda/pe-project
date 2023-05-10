<?php 

$section['title'] = $section['title'] ?? "Name of the person this resume belongs to";
$section['date'] = $section['date'] ?? "Their date title goes here";
$section['time'] = $section['time'] ?? "";
$section['place'] = $section['place'] ?? "";
$section['venue'] = $section['venue'] ?? "";
$section['summary'] = $section['summary'] ?? "This is a small summary of what they want the hiring person to see about them, highlighting things to stand out.";

?>
<summary-text class="<?=$section['class']?>">
	<h1 class="<?=$section['class-one']?>"><?=$section['title']?></h1>
	<p class="<?=$section['class-two']?>"><?=$section['date']?></p>
	<p class="<?=$section['class-two']?>"><?=$section['time']?></p>
	<p class="<?=$section['class-two']?>"><?=$section['place']?></p>
	<p class="<?=$section['class-two']?>"><?=$section['venue']?></p>
</summary-text>

