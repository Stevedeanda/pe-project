<?php 
$section['button'] = $section['button'] ?? "";
$section['picture'] = $section['picture'] ?? "";
?>

<section>
	<inner-column>

		<hero-module>
			<text-content>
				<text-area>
					<h1><?=$section['heading']?></h1>
					<p><?=$section['paragraph']?></p>
				</text-area>		
				
				<?php 
				
				if ($section['button']) {
					foreach ($section['button'] as $button) { ?>
						<link-area>
							<a href="<?=$button['link']?>"><?=$button['link-name']?></a>
						</link-area>
					<?php }
				}
				
				?>
			
			</text-content>

			<?php 
				
			if ($section['picture']) { ?>
				<picture>
					<img src="<?=$section['picture']?>">
				</picture>

			<?php }
			
			?>
		</hero-module>

	</inner-column>
</section>