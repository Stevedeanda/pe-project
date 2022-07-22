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
								<h2 class="strong-voice">Heading level 2 small</h2>
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
									<svg width="100%" height="100%" viewBox="0 0 29 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">

									    <g transform="matrix(1,0,0,1,-102.056,0)">
									        
									        <g id="Artboard2" transform="matrix(0.99625,0,0,1.02054,23.2999,0)">
									            <rect x="79.053" y="0" width="29.053" height="29.318" style="fill:none"/>
									            
									            <g class="square" transform="matrix(0.71457,0,0,0.69756,63.4984,-5.07903)">
									                <rect class="square" x="23.101" y="19.862" width="28.129" height="28.129"/>
									            </g>
									            
									            <g class="circle" transform="matrix(0.859429,0,0,0.83897,65.1401,-12.8409)">
									                <circle cx="38.186" cy="28.421" r="10.692"/>
									            </g>
									        </g>
									    </g>
									</svg>
								</picture>
								<h3 class="talk-voice2">Heading level 3 small</h3>
								<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
							<li>
								<picture>
									<svg width="100%" height="100%" viewBox="0 0 29 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">

									    <g transform="matrix(1,0,0,1,-102.056,0)">
									        
									        <g id="Artboard2" transform="matrix(0.99625,0,0,1.02054,23.2999,0)">
									            <rect x="79.053" y="0" width="29.053" height="29.318" style="fill:none"/>
									            
									            <g class="square" transform="matrix(0.71457,0,0,0.69756,63.4984,-5.07903)">
									                <rect class="square" x="23.101" y="19.862" width="28.129" height="28.129"/>
									            </g>
									            
									            <g class="circle" transform="matrix(0.859429,0,0,0.83897,65.1401,-12.8409)">
									                <circle cx="38.186" cy="28.421" r="10.692"/>
									            </g>
									        </g>
									    </g>
									</svg>
								</picture>
								<h3 class="talk-voice2">Heading level 3 small</h3>
								<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
							<li>
								<picture>
									<svg width="100%" height="100%" viewBox="0 0 29 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">

									    <g transform="matrix(1,0,0,1,-102.056,0)">
									        
									        <g id="Artboard2" transform="matrix(0.99625,0,0,1.02054,23.2999,0)">
									            <rect x="79.053" y="0" width="29.053" height="29.318" style="fill:none"/>
									            
									            <g class="square" transform="matrix(0.71457,0,0,0.69756,63.4984,-5.07903)">
									                <rect class="square" x="23.101" y="19.862" width="28.129" height="28.129"/>
									            </g>
									            
									            <g class="circle" transform="matrix(0.859429,0,0,0.83897,65.1401,-12.8409)">
									                <circle cx="38.186" cy="28.421" r="10.692"/>
									            </g>
									        </g>
									    </g>
									</svg>
								</picture>
								<h3 class="talk-voice2">Heading level 3 small</h3>
								<p class="calm-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
							<li>
								<picture>
									<svg width="100%" height="100%" viewBox="0 0 29 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">

									    <g transform="matrix(1,0,0,1,-102.056,0)">
									        
									        <g id="Artboard2" transform="matrix(0.99625,0,0,1.02054,23.2999,0)">
									            <rect x="79.053" y="0" width="29.053" height="29.318" style="fill:none"/>
									            
									            <g class="square" transform="matrix(0.71457,0,0,0.69756,63.4984,-5.07903)">
									                <rect class="square" x="23.101" y="19.862" width="28.129" height="28.129"/>
									            </g>
									            
									            <g class="circle" transform="matrix(0.859429,0,0,0.83897,65.1401,-12.8409)">
									                <circle cx="38.186" cy="28.421" r="10.692"/>
									            </g>
									        </g>
									    </g>
									</svg>
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

			<space-break>
				<h1 class="loud-voice">Layout 3</h1>				
			</space-break>





			<!-- LAYOUT THREE -->

			<section>
				<inner-column class="module-three">

					<module-three>

						<header>
							<p class="teaser talk-voice">Little teaser</p>
							<h2  class="strong-voice">Heading level 2 small</h2>
							<p class="meeting-voice">This is some body text. This is some body text.This is some body text. This is some body text.</p>
						</header>

						<ul>
							<li>
								<picture>
									<svg width="100%" height="100%" viewBox="0 0 29 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">

									    <g transform="matrix(1,0,0,1,-102.056,0)">
									        
									        <g id="Artboard2" transform="matrix(0.99625,0,0,1.02054,23.2999,0)">
									            <rect x="79.053" y="0" width="29.053" height="29.318" style="fill:none"/>
									            
									            <g class="circle" transform="matrix(0.71457,0,0,0.69756,63.4984,-5.07903)">
									                <circle cx="38.186" cy="28.421" r="10.692"/>
									            </g>           
									        </g>
									    </g>
									</svg>
								</picture>
								<h3 class="talk-voice">Heading level 3 small</h3>
								<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>

							<li>
								<picture>
									<svg width="100%" height="100%" viewBox="0 0 29 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">

									    <g transform="matrix(1,0,0,1,-102.056,0)">
									        
									        <g id="Artboard2" transform="matrix(0.99625,0,0,1.02054,23.2999,0)">
									            <rect x="79.053" y="0" width="29.053" height="29.318" style="fill:none"/>
									            
									            <g class="circle" transform="matrix(0.71457,0,0,0.69756,63.4984,-5.07903)">
									                <circle cx="38.186" cy="28.421" r="10.692"/>
									            </g>           
									        </g>
									    </g>
									</svg>
								</picture>
								<h3  class="talk-voice">Heading level 3 small</h3>
								<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>

							<li>
								<picture>
									<svg width="100%" height="100%" viewBox="0 0 29 30" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xml:space="preserve" xmlns:serif="http://www.serif.com/" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:1.5;">

									    <g transform="matrix(1,0,0,1,-102.056,0)">
									        
									        <g id="Artboard2" transform="matrix(0.99625,0,0,1.02054,23.2999,0)">
									            <rect x="79.053" y="0" width="29.053" height="29.318" style="fill:none"/>
									            
									            <g class="circle" transform="matrix(0.71457,0,0,0.69756,63.4984,-5.07903)">
									                <circle cx="38.186" cy="28.421" r="10.692"/>
									            </g>           
									        </g>
									    </g>
									</svg>
								</picture>
								<h3  class="talk-voice">Heading level 3 small</h3>
								<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
							</li>
						</ul>

					</module-three>

				</inner-column>
			</section>




			<space-break>
			<h1 class="loud-voice">Layout 4</h1>				
			</space-break>





			<!-- LAYOUT FOUR -->

			<section>
				<inner-column>

					<module-four>

						<header>
							<p class="teaser talk-voice">Little teaser</p>
							<h2 class="strong-voice2">Heading level 2 small</h2>
							<p class="meeting-voice2">This is some body text. This is some body text.This is some body text. This is some body text.</p>
						</header>

						<article>
							<ul>
								<p class="teaser talk-voice">Little teaser</p>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details open>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								
							</ul>

							<ul>
								<p class="teaser talk-voice">Little teaser</p>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>	
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>
								<li>
									<details>
										<summary>
											<h3  class="talk-voice">Heading level 3 small</h3>
										</summary>
											<p>This is some body text. This is some body text.This is some body text. This is some body text.</p>
									</details>
								</li>							
							</ul>
						</article>
					</module-four>

				</inner-column>
			</section>




			<space-break>
			<h1 class="loud-voice">Layout 5</h1>				
			</space-break>




			<!-- LAYOUT FIVE (my pick) -->


			<section>
				<inner-column>

					<tomorrow-land>

						<header>
							<picture>
								<img src="images/black-screen.png">
							</picture>
							<p>The Sound of Tomorrowland</p>
						</header>

						<show-cards>
							<mast-head>	
								<picture>
									<img src="images/black-screen.png">
								</picture>
								<text>
									<h2 class="attention-voice">Radio Show</h2>
									<h3 class="talk-voice2">Discover this week's hottest new releases</h3>
								</text>
							</mast-head>

							<?php foreach ( [1, 2, 3, 4, 5] as $article) { ?>

							<radio-show>
								<picture>
									<img src="images/black-screen.png">
								</picture>
								<text>
									<h2 class="attention-voice">Radio Show</h2>
									<h3 class="talk-voice2">Discover this week's hottest new releases</h3>
								</text>
							</radio-show>

							<?php } ?>
						</show-cards>

					</tomorrow-land>

				</inner-column>
			</section>

		</main>

	</body>

</html>










