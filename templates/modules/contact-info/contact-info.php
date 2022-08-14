<section class="<?=$page?>">
	<inner-column>
		<contact-info>
			<ul>
				<?php
					// Need to pull data from inside the data
		
		      	foreach($section['contact'] as $contact) { 
		
		      	$icon = $contact["icon"]; 
		      	$info = $contact["info"];
		      	$href = $contact["href"];
		      	?>
		
		          <li>
		          	<a href="<?=$href?>" target="steve"><?php include("templates/pages/resume/icons/icon-$icon.php"); ?><?=$info?></a>  
		          </li>
		
		      <?php } ?>
			</ul>
		</contact-info>
	</inner-column>
</section>