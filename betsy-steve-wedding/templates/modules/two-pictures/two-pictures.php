<?php 

$section['urlone'] = $section['urlone'] ?? "#";
$section['urltwo'] = $section['urltwo'] ?? "#";
$section['class'] = $section['class'] ?? "";
?>


<two-pictures class="<?=$section['class']?>">
	<picture class="<?=$section['class-two']?>">
		<img src="<?=$section['urlone']?>" alt="">
	</picture>
	<picture class="<?=$section['class-three']?>">
		<img src="<?=$section['urltwo']?>" alt="">
	</picture>
</two-pictures>