
<section>

	<h1>PHP&nbsppractice forms:</h1>

	<p>Click below and fill them out</p>

	<ul class="form-list">

	<?php

		include("form-name-data.php");

		foreach ($formName as $form) {
			$fileName = addDashes($form); ?>
			
			<li class="forms"><a href="?page=<?=$fileName?>"><?=$form?></</a></li>

	<?php	} ?>

	</ul>
</section>