<?php 

$section['heading'] = $section['heading'] ?? "";
$section['content'] = $section['content'] ?? "";
$section['class'] = $section['class'] ?? "";
$section['voice-one'] = $section['voice-one'] ?? "";
$section['voice-two'] = $section['voice-two'] ?? "";

?>


<generic-text class="<?=$section['class']?>-content">
	<h2 class="<?=$section['voice-one']?>"><?=$section['heading']?></h2>
	<p class="<?=$section['voice-two']?>"><?=$section['content']?></p>
</generic-text>

