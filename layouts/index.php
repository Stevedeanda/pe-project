<!doctype html>

<html lang="en">

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Different  layouts">
		<meta property="og:image" content="https://peprojects.dev/alpha-4/steve/responsive-modules/images/layout.png">
		<meta property="og:title" content="Layouts">

		<link rel="stylesheet" href="css/site.css">

		<title>Layouts</title>

	</head>


	<body>

		<!-- Practice Layout starts -->

		<main class="page-content">

			<space-break>
				<h1 class="loud-voice">Layout 1</h1>				
			</space-break>

			<!-- LAYOUT ONE -->

			<section>
				<inner-column>

					<module-one>
						<text>
							<header>
								<h2 class="meeting-voice">Heading level 2 small</h2>
								<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</header>
							
							<ul>
								<?php
								// Pull in JSON data into our PHP build to create articles.

								$json = file_get_contents("text-data.json");
								$textData = json_decode($json, true);
								$texts = $textData["text"];

					            foreach($texts as $text) { 

					            	$heading = $text["heading"]; 
					            	$paragraph = $text["paragraph"]; ?>
					            	
					                <li class="job-list">
					                	<h3 class="talk-voice"><?=$heading?></h3>
					                	<p><?=$paragraph?></p>
					                </li>

					            <?php } ?>
							</ul>						
						</text>

						<image-grid>

							<picture>
								<img src="images/black-screen.png">
							</picture>
							<picture>
								<img src="images/black-screen.png">
							</picture>
							<picture>
								<img src="images/black-screen.png">
							</picture>
							<picture>
								<img src="images/black-screen.png">
							</picture>

						</image-grid>
					</module-one>

				</inner-column>
			</section>

			<space-break>
				<h1 class="loud-voice">Layout 2</h1>				
			</space-break>

			<!-- LAYOUT TWO -->

			<section>
				<inner-column>
					
					<module-two>

						<header>
							<p class="teaser whisper-voice2">Little teaser</p>
							<h2 class="strong-voice2">Heading level 2 small</h2>
							<p class="meeting-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
						</header>

						<ul>
							<li>
								<picture>
									<img class="svg" src="images/second-icon.svg" alt="">
								</picture>
								<h3 class="talk-voice2">Heading level 3 small</h3>
								<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
							<li>
								<picture>
									<img class="svg" src="images/second-icon.svg" alt="">
								</picture>
								<h3 class="talk-voice2">Heading level 3 small</h3>
								<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
							<li>
								<picture>
									<img class="svg" src="images/second-icon.svg" alt="">
								</picture>
								<h3 class="talk-voice2">Heading level 3 small</h3>
								<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
							<li>
								<picture>
									<img class="svg" src="images/second-icon.svg" alt="">
								</picture>
								<h3 class="talk-voice2">Heading level 3 small</h3>
								<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
						</ul>

						<text-box>
							<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
						</text-box>

					</module-two>

				</inner-column>
			</section>

		</main>

	</body>

</html>










