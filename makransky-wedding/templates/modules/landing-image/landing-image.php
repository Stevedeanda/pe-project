<?php 

$section['url'] = $section['url'] ?? "#";
$section['class'] = $section['class'] ?? "";
?>


<landing-image class="<?=$section['class']?>">
	<picture>
		<img src="<?=$section['url']?>" alt="<?=$section['alt']?>">
	</picture>
</landing-image>