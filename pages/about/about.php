

<?php 
	$pageTitle = "About me";
	$pageDescription = "A little about me";
	include ('pages/page-header.php'); // module goes here
?>

<section class='about' id='about'>
	<inner-column>

		<about-content>						
			<ul class="job-info">									          
	       	<li><?=$about["where"]?></li>
	       	<li><?=$about["why"]?></li>
	       	<li><?=$about["onward"]?></li>									          
			</ul>
		</about-content>

		<a href="#">Substack goes here</a>

	</inner-column>
</section>