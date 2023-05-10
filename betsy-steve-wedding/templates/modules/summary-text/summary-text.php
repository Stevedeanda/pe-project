<?php 

$section['title'] = $section['title'] ?? "";
$section['date'] = $section['date'] ?? "";
$section['time'] = $section['time'] ?? "";
$section['place'] = $section['place'] ?? "";
$section['venue'] = $section['venue'] ?? "";
$section['class-one'] = $section['class-one'] ?? "";

?>
<summary-text class="<?=$section['class']?>">
	<h1 class="<?=$section['class-one']?>"><?=$section['title']?></h1>
	<p class="<?=$section['class-two']?>"><?=$section['date']?></p>
	<p class="<?=$section['class-two']?>"><?=$section['time']?></p>
	<p class="<?=$section['class-two']?>"><?=$section['place']?></p>
	<p class="<?=$section['class-two']?>"><?=$section['venue']?></p>
</summary-text>

