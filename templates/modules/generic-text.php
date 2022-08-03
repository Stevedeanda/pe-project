
<?php
 // $heading = isset($section['heading']) ? $section['heading'] : "Heading placeholder";
 $heading = $section['heading'] ?? "Heading placeholder";
?>


<section>
	<h2><?=$heading?></h2>

</section>