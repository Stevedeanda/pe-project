


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
			<sign-up class="<?=$section['class-four']?>">
				<?=$section['signup']?>
			</sign-up>
			<log-in class="<?=$section['class-four']?>">
				<?=$section['login']?>
			</log-in>
		</language-login>

	</inner-column>	
</section>

