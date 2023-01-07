<?php 

$section['content'] = $section['content'] ?? "This is where the content goes in a paragraph element";
$section['class'] = $section['class'] ?? "";
$section['voice'] = $section['voice'] ?? "";
$section['lfps'] = $section['lfps'] ?? "";
?>


<my-lfps class="<?=$section['class']?>">
	<p class="<?=$section['voice']?>"><?=$section['content']?></p>
</my-lfps>