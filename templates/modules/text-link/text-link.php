<?php 

$section['heading'] = $section['heading'] ?? "";
$section['content'] = $section['content'] ?? "";
$section['class'] = $section['class'] ?? "";
$section['voice-one'] = $section['voice-one'] ?? "";
$section['voice-two'] = $section['voice-two'] ?? "";
$section['url'] = $section['url'] ?? " ";
$section['link-content'] = $section['link-content'] ?? " ";
$section['voice'] = $section['voice'] ?? "";

?>



<text-link class="<?=$section['class']?>-content">
	<h2 class="<?=$section['voice-one']?>"><?=$section['heading']?></h2>
	<p class="<?=$section['voice-two']?>"><?=$section['content']?></p>
	<a class="<?=$section['voice-three']?>" href="<?=$section['url']?>" target="_blank"><?=$section['link-content']?></a>
</text-link>