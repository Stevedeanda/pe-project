<?php 

$section['content'] = $section['content'] ?? "This is where the content goes in a paragraph element";
$section['class'] = $section['class'] ?? "";
$section['voice'] = $section['voice'] ?? "";


?>


<generic-text class="<?=$section['class']?>-content">
	<p class="<?=$section['voice']?>"><?=$section['content']?></p>
</generic-text>

