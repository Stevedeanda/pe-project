<?php

//get the project data from the Data folder
//render the data
$json = file_get_contents("data/projects.json");
$projectData = json_decode($json, true);
?>


		<?php foreach ($projectData as $project) { 
			$project['name'] = $project['name'] ?? "The project title goes here" ?>
			<article>
				<h2><?=$project['name']?></h2>
				<a href="?page=project&id=<?=$project['id']?>">Check out <?=$project['name']?></a>
		
			</article>
			
		<?php } ?>





