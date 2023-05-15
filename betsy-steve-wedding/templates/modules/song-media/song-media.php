<?php 

$section['src'] = $section['src'] ?? "#";
$section['class'] = $section['class'] ?? "";
?>


<song-media class="<?=$section['class']?>">
	<iframe 
      style="border-radius:12px" 
      src="<?=$section['src']?>" 
      width="100%" 
      height="380" 
      allowfullscreen="" 
      allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" 
      loading="lazy">
   </iframe>
</song-media>