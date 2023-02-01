
<section class="<?=$section['class-one']?>">
	<inner-column>

		<feature-one>		

			<left-side>
				<text-area>
					<h3 class="<?=$section['class-two']?>"><?=$section['heading']?></h3>
					<p class="<?=$section['class-three']?>"><?=$section['paragraph']?></p>
				</text-area>
				<picture>
					<img src="<?=$section['picture']?>">
				</picture>
			</left-side>

			<right-side>
				<?php 
			
				if ($section['lists']) {
					foreach ($section['lists'] as $list) { ?>
						
						<list-item>
							<number-icon>
								<img src="<?=$list['icon']?>">
							</number-icon>
							<context-area>
								<h4 class="<?=$list['class-one']?>"><?=$list['list-heading']?></h4>
								<p class="<?=$list['class-two']?>"><?=$list['list-p']?></p>
							</context-area>
						</list-item>	
					<?php }
				} ?>
			</right-side>

		</feature-one>

	</inner-column>
</section>