



<section class="php-example">

	<p class="syntax"><span><</span>?php</p>

	<p class="comments">// These are all references //</p>

	<p class="variables"><span class="money-sign">$</span>name <span class="equal-sign">=</span> <span class="quotations">"</span><span class="name">Betsy</span><span class="quotations">"</span>;</p>

	<p class="variables"><span class="money-sign">$</span>url <span class="equal-sign">=</span> <span class="quotations">"</span><span class="name">https://perpetual.education/</span><span class="quotations">"</span>;</p>

	<p class="comments">// Here we use echo to print on the page and do math, fun! //</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p>Hello<span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p><span class="quotations">" </span><span class="period">. </span><span>(</span><span class="numbers">5432234</span><span>)</span><span class="period"> .</span><span class="quotations"> "</span><span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p> This is Steve<span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p><span class="quotations">" </span><span class="period">. </span><span>(</span><span class="numbers">1</span><span class="plus">+</span><span class="numbers">4</span><span>)</span><span class="period"> .</span><span class="quotations"> "</span><span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p> This is my number <span class="quotations">" </span><span class="period">. </span><span>(</span><span class="numbers">8323823729</span><span>)</span><span class="period"> .</span><span class="quotations"> "</span><span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p> Well I am putting a few strings together here.<span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p>Let's see here, what is 3234 plus 2938743... ah yes it's<span class="quotations">" </span><span class="period">. </span><span>(</span><span class="numbers">3234</span><span class="plus">+</span><span class="numbers">2938743</span><span>)</span><span class="period"> .</span><span class="quotations"> "</span><span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p>My wife's name is <span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>name</span><span class="period"> . </span><span class="quotations">"</span> and she is the best.<span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p>I'm a student at<span class="quotations">"</span><span class="period"> . </span><span class="name"><</span>a href=<span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>url</span><span class="period"> . </span><span class="quotations">"</span> PE<span class="name"><</span>/a><span class="quotations">"</span><span class="period"> . </span><span class="quotations">"</span><span class="name">.<</span>/p></span><span class="quotations">"</span>;</p>

	<p class="syntax"><span>?</span>></p>

</section>

<p></p>



<section class="results">

	<?php

		$name = "Betsy";
		$url = "https://perpetual.education/";

		// mad lib variables //

		$noun = "cake";
		$pluralNoun = "balloons";
		$verb = "pop";
		$bodyPart = "toes";
		$adjective = "wet";



		echo "<p>Hello</p>";
		echo "<p>" . (5432234) . "</p>";
		echo "<p> This is Steve</p>";
		echo "<p><mark>" . (1 + 4) . "</mark></p>";
		echo "<p>This is my number " . (8323823729) . ".</p>";
		echo "<p>Well I am putting a few strings together here.</p>";
		echo "<p>Let's see here, what is 3234 plus 2938743... ah yes it's <mark>" . (3234 + 2938743) . "</mark>.</p>";
		
		echo "<p>My wife's name is <mark>" . $name . "</mark> and she is the best.</p>";

		echo "<p>I'm a student at " . "<a href=" . $url . "> PE</a>" . ".</p>";

	?>

</section>











