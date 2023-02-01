<?php 
$section['buttons'] = $section['buttons'] ?? "";
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
			
			if ($section['buttons']) {
				foreach ($section['buttons'] as $button) { ?>
					
					<a class="<?=$button['class']?>"href="<?=$button['button']?>"><?=$button['button-name']?></a>	
				<?php }
			} ?>

			</two-buttons>
		</hero-module>

	</inner-column>
</section>