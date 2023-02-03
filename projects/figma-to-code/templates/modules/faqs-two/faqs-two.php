
<section class="<?=$section['class-one']?>">
	<inner-column>

		<client-content>		
			
			<text-area>
				<h3 class="<?=$section['class-two']?>"><?=$section['heading']?></h3>
				<p class="<?=$section['class-three']?>"><?=$section['paragraph']?></p>
			</text-area>
			<question-list>
				<?php 
			
				if ($section['summaries']) {
					foreach ($section['summaries'] as $summary) { ?>
						
						<details <?=$summary['open']?> class="<?=$summary['class-two']?>">
							<summary class="<?=$summary['class-one']?>"><?=$summary['question']?></summary>
							<p><?=$summary['answer']?></p>
						</details>


					<?php }
				} ?>
			</question-list>
		</client-content>

	</inner-column>
</section>