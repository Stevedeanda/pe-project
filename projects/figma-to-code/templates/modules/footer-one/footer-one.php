

<section class="<?=$section['class-one']?>">
	<inner-column>

		<footer>

			<site-map>
				<link-list>
					<!-- three list -->
					<?php 
					
						if ($section['link-list']) {
							foreach ($section['link-list'] as $links) { ?>
								<list-content>
									<h5 class="<?=$links['class']?>">
										<?=$links['heading']?>
									</h5>
									<?php
									if ($links['sub-list']) {
										foreach ($links['sub-list'] as $sub) { ?>
											<a class="<?=$sub['class']?>" href="<?=$sub['href']?>"><?=$sub['link-name']?></a>
										<?php }
									} ?>
								</list-content>
							<?php }
						} 
					?>
				</link-list>
				<email-subscribe>
					<email-content>
						<h5 class="<?=$section['class-two']?>">
							<?=$section['heading']?>
						</h5>
						<subscribe-link>
							<text-placeholder class="<?=$section['class-three']?>">
								<?=$section['placeholder']?>
							</text-placeholder>
							<submit-icon>
								<img src="<?=$section['arrow-icon']?>">
							</submit-icon>
						</subscribe-link>
						<p class="<?=$section['class-four']?>"> 
							<?=$section['text']?>
						</p>
					</email-content>
				</email-subscribe>
			</site-map>
			<hr>
			<social-terms>
				<main-logo>
					<img src="<?=$section['main-logo']?>">
				</main-logo>
				<legal-terms>
					<?php 
					
						if ($section['legal-term']) {
							foreach ($section['legal-term'] as $legal) { ?>
							
								<a class="<?=$legal['class']?>"href="<?=$legal['href']?>"><?=$legal['link-name']?></a>	
							<?php }
						} 
					?>
				</legal-terms>
				<social-icons>
					<?php 
					
						if ($section['social-icons']) {
							foreach ($section['social-icons'] as $social) { ?>
							
								<img src="<?=$social['icon']?>">
							<?php }
						} 
					?>
				</social-icons>	
			</social-terms>

		</footer>

	</inner-column>
</section>