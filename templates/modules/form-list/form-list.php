<?php

// Pull in JSON data into our PHP.

$json = file_get_contents("templates/pages/forms/forms.json");
$formsData = json_decode($json, true);

?>

<?php
$section['title'] = "Forms";
$section['description'] = "Using the book 'Exercises for Programmers', it gives problems to solve with constraints. Here are a few of the forms I have attempted.";
include ('templates/modules/page-header/page-header.php');

?>

<section>
	<inner-column>


		<ul>

			<?php

      	foreach ($formsData as $form) {
      		//echo $form['id'];
			$id = $form['id']; ?>
			
			<li class="forms">
				<a href="?page=forms&id=<?=$id?>"><?=$form['name']?></a>
			</li>

			<?php	} ?>
                    
		</ul>

	</inner-column>
</section>