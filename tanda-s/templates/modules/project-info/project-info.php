

<project-info>
	<?php 
	
	foreach ($detail['sections'] as $section) {
		$module = $section['module'];
		include ( "templates/modules/$module/$module.php");
	}
	
	?>
</project-info>
