
<section class="<?=$section['class-one']?>">
	<inner-column>

		<client-content>		
			
			<text-area>
				<h3 class="<?=$section['class-two']?>"><?=$section['heading']?></h3>
				<p class="<?=$section['class-three']?>"><?=$section['paragraph']?></p>
			</text-area>
				
			<review-area>
				<arrow-icon>
					<img src="<?=$section['left-arrow']?>">
				</arrow-icon>

				<?php 
			
				if ($section['reviews']) {
					foreach ($section['reviews'] as $review) { ?>
						
						<full-review>
							<star-icons>
								<img src="<?=$review['stars']?>">
							</star-icons>
							<text-quotes class="<?=$review['class-one']?>"><?=$review['list-p']?></text-quotes>
							<person-pic>
								<img src="<?=$review['person']?>">
								<p class="<?=$review['class-two']?>"><?=$review['author']?></p>
							</person-pic>
						</full-review>

					<?php }
				} ?>

				<arrow-icon>
					<img src="<?=$section['right-arrow']?>">
				</arrow-icon>
			</review-area>

		</client-content>

	</inner-column>
</section>