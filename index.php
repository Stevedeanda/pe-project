
<?php include('header.php'); ?>

			<p class="query">?<?=queryString();?></p>

			<?php

			if ($page == "home") {
				include("pages/home/home.php");
			}

			if ($page == "about") {
				include("pages/about/about.php");
			}

			if ($page == "projects") {
				include("pages/projects/projects.php");
			}

			if ($page == "resume") {
				include("pages/resume/resume.php");
			}

			if ($page == "contact") {
				include("pages/contact/contact.php");
			}

			if ($page == "forms") {
				include("pages/forms/forms.php");
			}

			$json = file_get_contents("pages/forms/forms.json");
			$formNames = json_decode($json, true);
			$forms = $formNames["forms"];

			foreach ($forms as $form) {
				if ($page == addDashes($form)) {
					include("pages/forms/exercises/" . addDashes($form). ".php");
				}
			}

			?>

<?php include ('footer.php'); ?>




