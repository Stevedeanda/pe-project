<?php

//get the project data from the Data folder
//render the data
$json = file_get_contents("data/projects.json");
$projectData = json_decode($json, true);
?>


		<projects-grid>
			<?php foreach ($projectData as $project) { 
				$project['name'] = $project['name'] ?? "The project title goes here";
				$project['description'] = $project['description'] ?? "Description of the project"; ?>
				<article class="<?=$project['class']?>-a">
					<h2 class="bold-voice"><?=$project['name']?></h2>
					<p class="calm-voice"><?=$project['description']?></p>
					<a class="regular-voice" href="?page=project&id=<?=$project['id']?>">Check out <?=$project['name']?></a>
			
				</article>
				
			<?php } ?>
		</projects-grid>





