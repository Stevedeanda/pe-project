<?php 
$section['button'] = $section['button'] ?? "";
$section['picture'] = $section['picture'] ?? "";
?>

<section class="<?=$section['class-one']?>">
	<inner-column>

		<hero-module>			
			<text-area>
				<h1 class="<?=$section['class-two']?>"><?=$section['heading']?></h1>
				<p class="<?=$section['class-three']?>"><?=$section['paragraph']?></p>
			</text-area>		
			<two-buttons>
			<?php 
			
			if ($section['button']) {
				foreach ($section['button'] as $button) { ?>
					
					<a href="<?=$button['link']?>"><?=$button['link-name']?></a>	
				<?php }
			} ?>

			</two-buttons>
		</hero-module>

	</inner-column>
</section>