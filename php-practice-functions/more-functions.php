
<style>
	
	section{
		padding: 20px;
		border: black 2px solid;
		border-radius: 6px;
	}

	code, pre {
		display: block;
		background-color: black;
		color: lime;
		padding: 4px;
		font-family: monospace;
	}

</style>

<section>

	<?php

	// array_push function
	echo "<h1>Array_push function: Here is a simple array</h1>";

	 $stuff = [
	 	"fire", 
	 	"water"
	 ];

	echo "<pre>";
		echo "<code>";
			echo print_r( $stuff);
		echo "</code>";
	echo "</pre>";

	  // this function pushes $stuff values in front of these new values to create a new single array
	 array_push($stuff, "wind", "earth");

	echo "array_push(\$stuff, 'wind', 'earth'); This function pushes \$stuff values in front of these new values to create a new single array.";
	echo "<br>";
	echo "<br>";
	echo "array_push combines the values into one array and this is how it looks now";

	echo "<pre>";
		echo "<code>";
			echo print_r( $stuff); //<-- array_push combine the values into one array and this is how it looks now
		echo "</code>";
	echo "</pre>";

	echo $stuff[0][3]; // the first [0] will echo "fire" but the second [3] will echo the "e" in fire because it breaks down fire into 0=f,1=i,2=r,3=e. Interesting!

	?>

</section>

<section>

	<?php

	echo "<h1>Count function</h1>";
	$a = [23, 43, 12, 54, "7"];
	var_dump(count($a)); // counted the arrays for a total of 5

	echo "<br>";

	echo count($a); // counted the arrays for a total of 5

	echo "<br>";

	$b[0]  = 7;
	$b[5]  = 9;
	$b[10] = 11;
	var_dump(count($b)); // counted the arrays for a total of 3

	echo "<br>";

	$food = [
		'fruits' => ['orange', 'banana', 'apple'],
		'veggies' => ['carrot', 'collard', 'pea']
		];

	var_dump(count($food, COUNT_RECURSIVE)); // counted all the fruits and veggies including "fruits" and "veggies" for a total of 8 arrays
	echo "<br>";

	var_dump(count($food)); // counted only "fruits" and "veggies" for a total of 2

	echo "<br>";

	var_dump(count($food['fruits'])) // counted only the fruits inside "fruits" for a total of 3
	?>

</section>

<section>

	<h1>Isset is a language construct</h1>

	<p>Isset determines if the variable is true or not, if it is true, it will go ahead and print it or echo</p>
	
	<?php

	$a = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

	var_dump(isset($a['test']));            // TRUE
	var_dump(isset($a['foo']));             // FALSE
	var_dump(isset($a['hello']));           // FALSE

	if (isset($a['test'])) {
		echo $a['test']; // will show "1"
	}

	if (isset($a['cake'])) {
		echo $a['cake']; // will show nothing since this variable doesn't exist
	}

	?>

</section>

<section>

	<h1>Unset is a language construct</h1>
	
	<?php

	$star = "sun";
	echo $star; // it shows that the variable $star still has the value of sun 
	unset($star); // unset destroys the value of sun in $star
	$star = "big"; // able to give $star a new value
	echo "<br>";
	echo $star; // $star shows new value to be big

	?>

</section>

<section>

	<h1>Strlen function</h1>

	<p>Returns the number of bytes rather than the number of characters in a string</p>
	
	<?php

	print_r(strlen("hello world")); // the hello string is 5 characters and world is 5 characters and the space between the two strings in 1 which adds up to 11

	?>

</section>

<section>

	<h1>Strrev function</h1>

	<p>Returns the string reversed</p>
	
	<?php

	$message = "Hello world!";

	echo $message;
	echo "<br>";
	echo "<br>";
	echo strrev($message); // outputs "!dlrow olleH"

	?>

</section>

<section>

	<h1>Strtolower function</h1>

	<p>Makes a string lowercase</p>
	
	<?php

	$message = "HELLO WORLD!";

	echo $message;
	echo "<br>";

	$message = strtolower($message);

	echo "<br>";
	echo $message;

	?>

</section>

<section>

	<h1>Trim function</h1>

	<p>You trim from the beginning and the end of the string</p>
	<p>Note: if you put characters that are in the middle of the string, it won't remove them unless you remove the outer characters first to get to that middle character.</p>
	
	<?php

	// trim($string, characters to remove);
	// $trimmed = trim($string, characters to remove);
	// var_dump($trimmed); it gives you what it will look like after you trimmed it.

	$one = "well look";

	$trimmed = trim($one);
	var_dump($trimmed);
	echo "<br>";
	$trimmed = trim($one, wek);
	var_dump($trimmed);
	echo "<br>";
	$trimmed = trim($one, wok);
	var_dump($trimmed);
	echo "<br>";
	$trimmed = trim($one, lo);
	var_dump($trimmed);

	?>

</section>

<section>
	
	<h1>Explode function</h1>

	<p>It splits a string by a string</p>
	<p>Note: you must ensure that the separator argument comes before the string argument</p>

	<?php

	// explode(" ", $string, $limit); this is the syntax for explode

	$pizza  = "piece1-piece2-piece3-piece4-piece5-piece6";
	$pieces = explode("-", $pizza); // I used the "-" to separate the strings and make them into an array list where I can now pick which part of the string I want to display
	echo $pieces[0]; // piece1
	echo "<br>";
	echo $pieces[1]; // piece2
	echo "<br>";
	echo "<br>";

	$message  = "I like the smell of waffles in the morning";
	echo $message;
	echo "<br>";
	echo "<br>";
	$strings = explode(" ", $message); // I used the "space" to separate the strings and make them into an array list. I could send a secret message by picking specific values now.
	echo $strings[0]; // I
	echo "<br>";
	echo $strings[1]; // like
	echo "<br>";
	echo $strings[5]; // waffles
	echo "<br>";
	echo $strings[3]; // smell
	echo "<br>";

	?>

</section>

<section>
	
	<h1>Implode function</h1>

	<p>Join array elements with a string</p>
	<p>It puts the array values into a string and the separator is what is used to separate them, usually a "comma" would do just fine. The separator can be anything.</p>

	<?php

	// implode("separator", $array);

	$array = ['lastname', 'email', 'phone'];
	var_dump(implode(",", $array)); // string(20) "lastname,email,phone"
	echo "<br>";
	// I used "space" to separate the list values
	echo implode(" ", $array); // lastname email phone

	echo "<br>";
	$random = [1234, 'street', 'dr.', 'Houston','TX', 77081];
	// I used "--" to separate the list values
	echo implode("--", $random); // 1234--street--dr.--Houston--TX--77081
	?>

</section>

<section>
	
	<h1>Substr function</h1>

	<p>Return part of a string</p>
	<p>Note: it comes with three parameters</p>
	<ul>
		<li>
			<h3>String</h3>
			<p>The string is the first parameter you put in, you can put a variable in there if it points back to a string.</p>
		</li>
		<li>
			<h3>Offset</h3> 
			<p>Decides where on the string you will start to select. If non-negative, start with 0 up till the size of the string, if string is "character" then it goes up to 8.</p>
			<p>If negative, then it starts from the back of the string.</p>
		</li>
		<li>
			<h3>Length</h3>
			<p>If the number used is positive it will return the characters from the point of the offset.</p>
			<p>If the number used is negative, it will remove the characters starting from the back of the string till it reaches the point where the offset is set.</p>
		</li>

	</ul>

	<?php

	// substr($string, $offset, $length);
	
	// the offset is 3, so it will start at "r" since c=0
	// the length is 3, starting with "r" it grabs "a" and "c" so it's 3 characters total
	$sub = substr("character", 3, 3); // rac
	echo $sub;
	echo "<br>";
	// the offset is 1, so it will start at "h" since c=0
	// the length is -4, so it will remove 4 characters starting at the end of the string
	$sub = substr("character", 1, -4); // hara
	echo $sub;
	echo "<br>";
	// the offset is -5, so it will start at the second "a" since r=(-1). Going backwards 5 from the last character in the string is "a" 
	// the length is 3, so it will return two characters starting from the second "a"
	$sub = substr("character", -5, 2); // ac
	echo $sub;
	echo "<br>";
	// the offset is -2, so it will start at the "t" since r=(-1). Going backwards 2 from the last character in the string is "t" 
	// the length is -1, so it will remove 1 characters starting at the end of the string
	$sub = substr("character", -2, -1); // e
	echo $sub;
	?>

</section>

<section>
	
	<h1>Array_rand function</h1>

	<p>Pick one or more random keys out of an array</p>
	<p>Two parameters: array and number</p>
	<p>The number parameter specifies how many entries should be picked</p>

	<?php

	// array_rand($array, $num);


	$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
	// you create a variable to be able to echo the results
	$random = array_rand($input, 3); 
	echo $input[$random[0]] . "\n";// it will show a random name from the list everytime you refresh the page.
	// echo $input[$random[1]] . "\n";// it will show a random name from the list everytime you refresh the page.
	?>

</section>

<section>
	
	<h1>Array_reverse function</h1>

	<p>Returns an array with elements in reverse order</p>
	<p>Two parameters</p>
	<p>First one is $array</p>
	<p>Second one is preserve_keys. This one if set to true numeric keys are preserved. Non-numeric keys are not affected by this settling and will always be preserved</p>

	<?php

	//array_reverse($array,)
	

	$input  = array("php", 4.0, array("green", "red"));
	$reversed = array_reverse($input);
	$preserved = array_reverse($input, true);

	echo implode(",", $input); // this shows the array list normal, I used implode to show the list using echo
	echo "<br>";
	echo implode(",",$reversed); // this shows the array list in reverse
	echo "<br>";
	echo implode(",",$preserved); // this shows the array list in reverse also
	echo "<br>";
	echo "<br>";

	$list = ["Neo", "Morpheus", "Trinity", "Cypher", "Tank"];
	$reverse = array_reverse($list);
	$preserve = array_reverse($list, true);

	echo implode(",",$list) . "\n"; // this shows the array list normal, I used implode to show the list using echo
	print_r($list); // ([0] => Neo [1] => Morpheus [2] => Trinity [3] => Cypher [4] => Tank)
	echo "<br>";
	echo implode(",",$reverse) . "\n"; // this shows the array list in reverse
	// preserve_key was not used and it reassigned the numeric key for each value
	print_r($reverse); // ([0] => Tank [1] => Cypher [2] => Trinity [3] => Morpheus [4] => Neo)
	echo "<br>";
	echo implode(",",$preserve) . "\n"; // this shows the array list in reverse also
	// preserve_key was used and the numeric key was kept for each value
	print_r($preserve); // ([4] => Tank [3] => Cypher [2] => Trinity [1] => Morpheus [0] => Neo)
	echo "<br>";
	echo "<br>";
	?>

</section>

<section>
	
	<h1>Array_slice function</h1>

	<p>Extracts a slice of the array</p>
	<p>Note: it comes with three parameters</p>
	<ul>
		<li>
			<h3>String</h3>
			<p>The string is the first parameter you put in, you can put a variable in there if it points back to a string.</p>
		</li>
		<li>
			<h3>Offset</h3> 
			<p>Decides where on the string you will start to select. If non-negative, start with 0 up till the size of the string, if string is "character" then it goes up to 8.</p>
			<p>If negative, then it starts from the back of the string.</p>
		</li>
		<li>
			<h3>Length</h3>
			<p>If the number used is positive it will return the characters from the point of the offset.</p>
			<p>If the number used is negative, it will remove the characters starting from the back of the string till it reaches the point where the offset is set.</p>
		</li>
		<li>
			<h3>Preserve_key</h3>
			<p>This one if set to true numeric keys are preserved. Non-numeric keys are not affected by this settling and will always be preserved</p>
			<p>It pretty much if it's true it keeps the numeric value it started with in the array, if not used then it will be assigned a new numeric value</p>
			<p>You use true in the function</p>
		</li>

	</ul>

	<?php

	// array_slice($array, offset, length, preserve_key)

	$input = array("a", "b", "c", "d", "e");

	print_r(array_slice($input, 2, -1)); // array ([0] => c [1] => d)
	echo "<br>";
	print_r(array_slice($input, 2, -1, true)); // array ([2] => c [3] => d)

	?>

</section>

<section>
	
	<h1>Array_unique function</h1>

	<p>Removes duplicate values from an array</p>
	<p>Note: not intended to work on multi-dimensional arrays</p>
	<p>Flags is the second parameter. It's optional, flag may be used to modify the sorting behavior using these values:</p>
	<ul>
		<li>SORT_REGULAR - compare items normally (don't change types).</li>
		<li>SORT_NUMERIC - compare items numerically.</li>
		<li>SORT_STRING - compare items as strings.</li>
		<li>SORT_LOCALE_STRING - compare items as strings, based on the current locale.</li>
	</ul>

	<?php

	// array_unique( $array, $flags);

	$input = ["spiderman", "hulk", "deadpool", "cyclops", "thanos", "hulk", "spiderman"];
	$result = array_unique($input);
	print_r($result); // (0] => spiderman [1] => hulk [2] => deadpool [3] => cyclops [4] => thanos)
	

	?>

</section>

<section>
	
	<h1>Date</h1>

	<p>It allows you to create a format of date and time.</p>
	<p>First parameter is format</p>
	<p>Second parameter is timestamp, it's optional</p>
	<p>There is a key that helps you format the date the way you want to</p>

	<?php

	// date($format, $timestamp)

	date_default_timezone_set('central');

	echo date("F d");// not sure what this is...it gives out "Wednesday"
	echo "<br>";
	// not sure what is going on here either...
	echo date('l jS \of F Y h:i:s A'); // returns --> Wednesday 8th of June 2022 07:14:56 PM
	echo "<br>";


	?>

</section>

<section>
	

	<?php

	$userData = [ 
	"betsy" => "secrets",
	"steve" => "mia",
	];

	$id = "betsy";

	echo $userData[$id];


	?>
</section>





















