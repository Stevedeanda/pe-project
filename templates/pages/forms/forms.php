<section class='about' id='about'>
	<inner-column>

		<h1 class="loud-voice">Forms</h1>

		<p>Using the book "Exercises for Programmers", it gives problems to solve with constraints. Here are a few of the forms I have attempted. </p>

		<ul class="job-info">

			<?php
			// Pull in JSON data into our PHP.

			$json = file_get_contents("templates/pages/forms/forms.json");
			$formNames = json_decode($json, true);
			$forms = $formNames["forms"];

      	foreach ($forms as $form) {
			$fileName = addDashes($form); ?>
			
			<li class="forms">
				<a href="?page=<?=$fileName?>"><?=$form?></a>
			</li>

			<?php	} ?>
                    
		</ul>

	</inner-column>
</section>