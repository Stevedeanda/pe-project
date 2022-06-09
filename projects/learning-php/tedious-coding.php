


<section class="explanation">
			
	<h2 class="text">In this next section, we are instructed to do a madlib. Here we are practicing to use references to complete the blank spaces.</h2>

	<h2 class="text">I like to call this the tedious way of doing php.</h2>

	<h2 class="title">Madlib inside PHP.</h2>

</section>

<section class="php-example">

	<p class="syntax"><span><</span>?php</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p>Let's do the madlib.<span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="comments">// These references will be used in the Mad lib //</p>

	<p class="variables"><span class="money-sign">$</span>noun <span class="equal-sign">=</span> <span class="quotations">"</span><span class="name">cake</span><span class="quotations">"</span>;</p>

	<p class="variables"><span class="money-sign">$</span>pluralNoun <span class="equal-sign">=</span> <span class="quotations">"</span><span class="name">balloons</span><span class="quotations">"</span>;</p>

	<p class="variables"><span class="money-sign">$</span>verb <span class="equal-sign">=</span> <span class="quotations">"</span><span class="name">pop</span><span class="quotations">"</span>;</p>

	<p class="variables"><span class="money-sign">$</span>bodyPart <span class="equal-sign">=</span> <span class="quotations">"</span><span class="name">toes</span><span class="quotations">"</span>;</p>

	<p class="variables"><span class="money-sign">$</span>adjective <span class="equal-sign">=</span> <span class="quotations">"</span><span class="name">wet</span><span class="quotations">"</span>;</p>

	<p class="print"><span class="echo">echo </span><span class="quotations">"</span><span class="name"><</span>p>Today, every student has a computer small enough to fit into their<span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>noun</span><span class="period"> . </span><span class="quotations">"</span>. You can solve any math problem by simply pushing the computer's little<span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>pluralNoun</span><span class="period"> . </span><span class="quotations">"</span>. Computers can add, multiply, divide, and<span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>verb</span><span class="period"> . </span><span class="quotations">"</span>. They can also<span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>verb</span><span class="period"> . </span><span class="quotations">"</span> better than a human. Some computers have their own<span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>adjective</span><span class="period"> . </span><span class="quotations">"</span> screen that shows all kinds of<span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>pluralNoun</span><span class="period"> . </span><span class="quotations">"</span> and <span class="quotations">"</span><span class="period"> . </span><span class="money-sign">$</span><span>adjective</span><span class="period"> . </span><span class="quotations">"</span> figures.<span class="name"><</span>/p></span><span class="quotations">"</span>;</p>

	<p class="syntax"><span>?</span>></p>

</section>

<section class="results">

	<?php

		echo "<p>Let's do the madlib.</p>";

		echo "<p>Today, every student has a computer small enough to fit into their <mark>" . $noun . "</mark>. You can solve any math problem by simply pushing the computer’s little <mark>" . $pluralNoun . "</mark>. Computers can add, multiply, divide, and <mark>" . $verb . "</mark>. They can also <mark>". $verb . "</mark> better than a human. Some computers have their own <mark>". $bodyPart . "</mark>. Other’s have a/an <mark>" . $adjective . "</mark> screen that shows all kinds of <mark>" .$pluralNoun ."</mark> and <mark>" . $adjective . "</mark> figures.</p>";

	?>

</section>






