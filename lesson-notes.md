lesson-notes.md


# lesson notes

## Another Exercise for Programmers Practice Day (June 8)

_Questions_
- Not sure I understand how array_unique works?
- Do not understand how date works?

### Checklist

- [x] go through the daily lesson
	- [x] take notes on documentation
	- [x] Add 2 more exercises (check if any exercises use the methods I want to use)
	- [x] share index of forms, ask for feedback regarding usability
	- [x] get together with someone to look over each others exercise of the day

### Exercise Notes

- Here are my notes for today, I got the hang of most of them.

```

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
	$random = array_rand($input, 2); 
	echo $input[$random[0]] . "\n";// it will show a random name from the list everytime you refresh the page.
	echo $input[$random[1]] . "\n";// it will show a random name from the list everytime you refresh the page.
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


```

## Practice, practice, practice (June 7)

 _Questions_

- How do I get the decimals to work on inputs? _Derek answered this, we use an attribute called `step`_.

### Checklist

- [x] do the daily lesson exercise
- [x] add perpetual-education, sheriffderek, bdlowery as collaborators to my pe-projects in git-hub.
- [x] lesson-notes.md in barebones pe-project folder.
- [x] take notes, questions from the lecture/videos and commit those (share link when done).
- [x] Watch video and start thinking about form styling.
- [x] Making a lot of forms, let's try to put them in `/steve/pe-projects/efp`. Need to make a folder for them. 
- [x] Create an index page for the forms I have so far, that link to each form.
- [x] Set the forms so that they all pull from the same set of styles. Consider matching it to your personal site and using that - or having a form page specific styling. 
- [x] Have 4 forms (in total)
	- [x] with normalized styles
	- [x] and tested
- [x] Get together with another student- and take turns walking through 2 of your forms. 
- [] try/add to the audiophile-data on git.

### Video Notes

- all the browsers show buttons and inputs in a different style. They must have defaults attached to them.
- the next important inputs after text and numbers are
	- radio (which is a little circle you can check)
	- checkbox (which is a little box you can check)
- Derek made a custom element for combining label and input together.
- Why is the font different in the input than the label?
- What are some cool attributes?
- How to make the style look the same between all the browsers?
- Explore the web develop tool and try to create a reset setup going on. 

// echo $filePath;
		// if ( file_exist($filePath)) {
		// 	echo createLink($filePath, $fileName);
		// }

**Web dev exploring notes**

- _Inputs_
- I see that `input` has a few styles in it:
	`background-color: field;` 
	`padding: 1px 2px;`
	`border-width: 2px;`
	`border-style: inset;`
	`border-color: -internal-light-
		dark(rgb(118,118,118),rgb(133,133,133));`
	`border-image: initial;`

	- I can probably reset all of these to try to style my own inputs.
	- Input doesn't seem to have a font, it's all blank

- _Buttons_
- They got a lot styles too:
	```
		background-color: buttonface;
		padding: 1px 6px;
		border-width: 2px;
		border-style: outsets;
		border-color: buttonborder;
		border-image: initial;
		color: buttontext;
	```	
	- In order to style the button we would need to reset _background-color_, _padding_, _border_, and _color_. 

### Exercises for today

#### Plan out an exercise

- I will do the **Counting the Number of Characters** from the exercise for programmers book

- The pseudocode
	- create a form using the form element, write method="POST"
	- create a paragraph element and write 'Let's count characters'
	- create a label element and write 'Write your characters here'
	- create an input element, give it attributes
	- create a button and give it attribute
	- put the label and input inside a div to give it style order
	- add the style sheet already made for this to focus on php part
	- create a default variable that will be for the string character
	- create a if statement that will grab the information from the form
	- in the if statement I will use 'isset' to grab POST from the form
	- this way if something was submitted it will grab that information
	- then I will use the default variable in the if statement so that it will replace it with the input submitted
	- then I will use strlen(variable) to get it to count the characters that were submitted
	- I will then put the answer in a message variable to display it at the bottom of the form
	- I will test it out.

### Conclusion

- I was able to get my index up and running. I style it a bit to mactch my site but not completely happy with it. I was able to do make all the forms to have some type of uniform style. Not the best but I wasn't focused on the style. I did reset some of the settings for button and inputs to make them all the same. I did the pseudocode here and it actually helped a lot before writing the code. Almost served as a list of things to do. 
- The only thing I didn't check off my list was adding to the audiophile. 


## Server Forms (June 6)

- POST is not a random name, it's the actual name to use to push the form from HTML to PHP.
- I realized that the element forms has no "s" in it it's actually form.
- I learned what a placeholder is, tells you what to put in the input area, once you start typing the placeholder dissappears. 
- A good way to know what label, input, and button are was to put padding on them and to see what would happen. They are display: inline-block because the padding went all the way around but only around the element. Didn't strech across the whole screen like a block element would. 
- A good way to style label and input is to put them inside the div element and give it a class. 
- You are also able to change the display to display:flex to better control where it will be on the page. 
- Good idea to give the form a max-width to keep it from going all across the page. 
- Learned that we can style button by using "button[type="submit"]" in CSS.
- Learned about the secret global variables that you can't see but are there. 
- print_r($stuff) and var_dump($stuff) show you the array that is created by POST.

	$stuff = $ POST;
	echo $_POST["berries"]:
- Learned that this will grab the variable you input, once you press submit on the form it will show you what you wrote in the input. 

	if ( isset($ POST["submitted"])) {
	$guests = $_POST["guests"];
	$berries = $_POST["berries"];
	$total = $guests * $berries;
	echo "<"p>$total<"/p>";
- Here, once you hit submit, the form will take the data and it will multiply the inputs that were submitted. Then it will echo and display the total.
- We learned that input has many types 
	- type = text
	- type = number
	- type = email
	- type = password
	- type = submit
	- type = range
- Input comes with a lot more types but these are the ones from today's video
- Input does not inherent font, have to put them in style.
- Input has a lot of attributes as well.
- Input is a self-closing tag
- Attributes help to make certain types more specific and set boundaries to what is being inputted. 
	- value
	- min (the least amount of numbers to input)
	- max (the most amount of numbers to input)
- Floatval($berries) turns the string into numbers of any kind. 
- When using numbers and you want to make it so that the inputs don't go into the negatives. There are two ways to do this.
	- First is you can write an if statement where you put the variable to be greater or equal to zero. Doing this, a negative number can be put in the input but when you go to submit it will not work. 
	- Second way is you can add a attribute of min=0 so that, no number below 0 can be used. When you try it will give you an error message. 


- In conclusion
	- I did four practice runs and I feel like I need more practice. I get the the form part for the most part. I also get the styling. When it comes to the php part, I tend to go back to my notes for reference. I definitely need to spend more time just getting the hang of the php part. We are suppose to be able to anything yet I feel like I am unable to come up with any new ways to do these forms. 
