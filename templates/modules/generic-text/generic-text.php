<?php 

$section['heading'] = $section['heading'] ?? "This is where the heading goes";
$section['content'] = $section['content'] ?? "This is where the content goes in a paragraph element";
$section['class'] = $section['class'] ?? "";

?>


<generic-text class="<?=$section['class']?>">
	<h2 class="loud-voice"><?=$section['heading']?></h2>
	<p><?=$section['content']?></p>
</generic-text>

