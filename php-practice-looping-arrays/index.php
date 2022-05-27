


<?php


$myArray = ["one", "well", 2, "cat", true, false, "no"];

echo "I have " . $myArray[0] . " " . $myArray[3] . ".";

$monster = [
	"id" => "0001",
	"name" => "Ghost",
	"favorite_food" => "Chicken nuggets",
	"age" => "two years",
	"adopted" => false,
];

$message = "$monster[favorite_food] is $monster[name]'s favorite food. $monster[name] is $monster[age].";

$template = "<p id=" . $monster[id] . ">" . $message . "</p>";







echo $template;

$fruitsArray = ["apple", "banana", "carrot", "pineapple", "eggplant", "grape", "blueberries"];

// the <ol> creates an ordered list to put the fruitsArray in a list when it prints them out

echo "<ol>";

// code below is saying that for each thing inside of fruit it is doing whatever the code says

foreach ($fruitsArray as $fruit) {
	echo "<li>" . $fruit . "</li>";
}

echo "</ol>";
