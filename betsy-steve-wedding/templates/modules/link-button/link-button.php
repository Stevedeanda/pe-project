<?php 

$section['content'] = $section['content'] ?? "";
$section['href'] = $section['href'] ?? "";
$section['class'] = $section['class'] ?? "";

?>
<link-button class="<?=$section['class']?>">
	<a href="<?=$section['href']?>" target="booking"><?=$section['content']?></a>
</link-button>