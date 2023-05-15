<?php 

$section['content'] = $section['content'] ?? "";
$section['href'] = $section['href'] ?? "";
$section['class'] = $section['class'] ?? "";
$section['target'] = $section['target'] ?? "";

?>
<link-button class="<?=$section['class']?> <?=$section['voice']?>">
	<a href="<?=$section['href']?>" target="<?=$section['target']?>"><?=$section['content']?></a>
</link-button>