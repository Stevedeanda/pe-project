<?php 

$section['url'] = $section['url'] ?? "#";
$section['class'] = $section['class'] ?? "";
?>


<graphic-diptych class="<?=$section['class']?>">
	<picture>
		<img src="<?=$section['url']?>" alt="<?=$section['alt']?>">
	</picture>
</graphic-diptych>
