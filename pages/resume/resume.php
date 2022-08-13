

<header class='page-header'>
	<inner-column>

		<h1 class="loud-voice">Resume</h1>

		<p>Take a look</p>

	</inner-column>
</header>

<section class="page-content">
	<inner-column>

		<introduction class="section-content">
			<h1 class="loud-voice">Steve DeAnda</h1>
			<h2 class="strong-voice">Web Developer</h2>
			<p class="calm-voice">This is where I write what I am good at and my experience. I can talk about my learning and how I am ready for an opportunity to work. I can talk about the projects I have worked on. I can talk about my past jobs and how they give me good on the job experince for this new position. </p>
		</introduction>

		<work-experience class="section-content">
			<h2 class="attention-voice">Work Experience</h2>
			<hr>
			<ul class="job-info">

				<?php
				// Pull in JSON data into our PHP build to create articles.

				$json = file_get_contents("pages/resume/resume.json");
				$workData = json_decode($json, true);
				$jobs = $workData["works"];

            	foreach($jobs as $job) { 

            	$title = $job["job-title"]; 
            	$company = $job["company-name"];
            	$dates = $job["dates-worked"];
            	$location = $job["location"];
            	$tasks = $job["tasks"];
            	?>

                <li class="job-list">
                	<h3 class="title talk-voice"><?=$title?></h3>
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

		<personal-info class="section-content">
			<contact-info>
				<ul>
					<li>
						<a class="icon" href="#"><?php include('icons/icon-mail.php'); ?>stevedeanda5@gmail.com
						</a>
					</li>
					<li>
						<p class="icon"><?php include('icons/icon-phone.php'); ?>832.382.3729
						</p>
					</li>
					<li>
						<p class="icon"><?php include('icons/icon-location.php'); ?>Houston, TX
						</p>
					</li>
					<li>
						<a class="icon" href="https://stevedeanda.dev/"><?php include('icons/icon-world.php'); ?>stevedeanda.dev
						</a>
					</li>
				</ul>
			</contact-info>

			<technical-skills>
				<h2 class="attention-voice">Technical&nbspSkills</h2>
				<hr>
				<ul> 
					<li>HTML</li>
					<li>CSS</li>
					<li>PHP</li>
					<li>Wordpress</li>
					<li>JavaScript</li>
				</ul>
			</technical-skills>

			<interest-info>
				<h2 class="attention-voice">Interests</h2>
				<hr>
				<ul>
					<li>Puzzles</li>
					<li>Legos</li>
					<li>Outdoor biking</li>
					<li>Hiking</li>
				</ul>
			</interest-info>
		</personal-info>

	</inner-column>
</section>