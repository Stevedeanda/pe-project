<?php

//get the project data from the Data folder
//render the data
$json = file_get_contents("data/projects.json");
$projectData = json_decode($json, true);
?>

<section class="<?=$page?>">
	<inner-column>
		<?php foreach ($projectData as $project) { ?>
			
			<article>
				<h2><?=$project['name']?></h2>
				<a href="?page=project&id=<?=$project['id']?>">Check out <?=$project['name']?></a>
		
			</article>
			
		<?php } ?>
	</inner-column>
</section>




