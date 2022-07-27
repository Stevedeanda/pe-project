

<?php include("templates/modules/page-header.php");?>


<?php foreach ($pageData['sections'] as $section) { 

	// if ($section["module"] == "grid_list") {
	// 	include('templates/modules/grid-list.php');
	// }
	// if ($section["module"] == "generic_text") {
	// 	include('templates/modules/generic-text.php');
	// } ?>

	<section>
		<inner-column>
			<?php // or we can just include the template like this ?>
			<?php include("templates/modules/$section[module].php"); ?>
		</inner-column>
	</section>
<?php } ?>
	
