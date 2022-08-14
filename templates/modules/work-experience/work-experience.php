
<section class="<?=$page?>">
	<inner-column>
		<work-experience class="section-content">
			<h2><?=$section['title']?></h2>
			<hr>
			<ul class="job-info">
		
				<?php
					// Need to pull data from inside the data
		
		      	foreach($section['works'] as $work) { 
		
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
							foreach($tasks as $task) { ?>
							<li class="task calm-voice"><?=$task?></li>
							<?php } ?>
		             	</ul>
		          </li>
		
		      <?php } ?>
			</ul>
		</work-experience>
	</inner-column>
</section>












