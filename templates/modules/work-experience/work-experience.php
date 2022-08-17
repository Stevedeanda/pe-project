
<?php 

$section['title'] = $section['title'] ?? "This is where the work experience title goes";

?>

<work-experience class="section-content">
	<h2><?=$section['title']?></h2>
	<hr>
	<ul class="job-info">

		<?php
			// Need to pull data from inside the data

      	foreach($section['works'] as $work) { 
      	$work["job-title"] = $work["job-title"] ?? "Job title goes here";
      	$work["company-name"] = $work["company-name"] ?? "Company name goes here";
      	$work["dates-worked"] = $work["dates-worked"] ?? "The dates of when you worked at this company";
      	$work["location"] = $work["location"] ?? "What city and state was this job located in";


      	$jobTitle = $work["job-title"]; 
      	$company = $work["company-name"];
      	$dates = $work["dates-worked"];
      	$location = $work["location"];
      	$tasks = $work["tasks"];
      	?>

          <li class="job-list">
          	<h3 class="title talk-voice"><?=$jobTitle?></h3>
          	<h4 class="company meeting-voice"><?=$company?></h4>
          	<p class="dates whisper-voice"><?=$dates?> | <?=$location?></p>
             	<ul>
             		<?php 
					foreach($tasks as $task) { 
						$task = $task ?? "Job description or responsabilities go here";?>
					<li class="task calm-voice"><?=$task?></li>
					<?php } ?>
             	</ul>
          </li>

      <?php } ?>
	</ul>
</work-experience>













