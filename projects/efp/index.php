
<?php include("style.php"); ?>

<section>

<h1>Here are my practice forms</h1>

<?php

	$formName = [
		"Ask a Question",
		"Calculate Paycheck",
		"Calculating Berries",
		"Drinking Age",
		"Login Form",
		"Counting Characters",
		"Add Space Data",
	];

	function addDashes($string) {
		$splitString = explode(" ", $string);
		$dashString = implode("-", $splitString);
		return strtolower($dashString);
	}

	foreach ($formName as $form) {
		$fileName = addDashes($form) . ".php"; ?>

		<ul>
			<li><a href="<?=$fileName?>"><?=$form?></</a></li>
		</ul>

<?php	} ?>


</section>	
		

	
	





	