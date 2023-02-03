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
				<email-input>
					<img src="<?=$section['picture']?>">
					<p><?=$section['text']?></p>
				</email-input>
				<sign-up>
					<a class="<?=$section['class-four']?>"href="<?=$section['button']?>"><?=$section['button-name']?></a>
				</sign-up>
			</two-buttons>
		</hero-module>

	</inner-column>
</section>