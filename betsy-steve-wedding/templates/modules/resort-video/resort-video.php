<?php 

$section['src'] = $section['src'] ?? "#";
$section['class'] = $section['class'] ?? "";
?>


<resort-video class="<?=$section['class']?>">
	<iframe
      src="<?=$section['src']?>"
      title="Riu Palace Costa Mujeres video"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen
   ></iframe>
</resort-video>