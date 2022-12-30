<?php 

$section['heading'] = $section['heading'] ?? "This is where the heading goes";
$section['content'] = $section['content'] ?? "This is where the content goes in a paragraph element";
$section['class'] = $section['class'] ?? "";
$section['voice-one'] = $section['voice-one'] ?? "";
$section['voice-two'] = $section['voice-two'] ?? "";

?>


<welcome-landing class="<?=$section['class']?>">
	<h2 class="<?=$section['voice-one']?>"><?=$section['heading']?></h2>
	<p class="<?=$section['voice-two']?>"><?=$section['content']?></p>
</welcome-landing>