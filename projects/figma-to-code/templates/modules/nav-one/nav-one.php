


<section class="<?=$section['class-one']?>">
	<inner-column>

		<main-logo>
			<img src="<?=$section['main-logo']?>">
		</main-logo>

		<mast-head>
			<nav class="<?=$section['class-two']?>">	

				<?php 
				
				if ($section['links']) {
					foreach ($section['links'] as $links) { ?>
						<a class="<?=$links['class']?>" href="<?=$links['link']?>"><?=$links['link-name']?></a>
					<?php }
				} ?>	

			</nav>
		</mast-head>
		
		<language-login>
			<language-en>
				<globe-icon>
					<img src="<?=$section['globe-icon']?>">
				</globe-icon>
				<abbreviation-text class="<?=$section['class-three']?>">
					<?=$section['language']?>
				</abbreviation-text>
			</language-en>
			<log-in class="<?=$section['class-four']?>">
				<?=$section['login']?>
			</log-in>
		</language-login>

	</inner-column>	
</section>

