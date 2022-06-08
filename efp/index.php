
<?php include("style.php"); ?>

<section>

<h1>Here are my practice forms</h1>

<?php

	$forms = [ 
		"01", "02", "03", "04", "05", "06", "07",
	];	

	echo "<ul>";
	foreach ($forms as $fileName) { 
		$filePath = "practice-$fileName.php";
		echo"<li><a href='$filePath'>$filePath</a></li>";
	}
	echo "</ul>";
?>


</section>	
		

	
	





	