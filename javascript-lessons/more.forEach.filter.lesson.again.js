

var people = ["Betsy", "Mia", "Steve", "Jr", "Benji", "Naomi", "Silda", "Hector", "Lourdes", "Jose", "Ivan", "Edith", "Jennifer", "Raissa", "Angie", "Heidi", "Andrew", "Daniel", "Jennifer"];

var familyExample = {
	name: "Betsy",
	relationship: "wife",
	age: 29,
};

var family = [
	{
		name: "Steve",
		relationship: "self",
		age: 32,
	},
	{
		name: "Betsy",
		relationship: "wife",
		age: 29,
	},
	{
		name: "Mia",
		relationship: "daughter",
		age: 1,
	},
	{
		name: "Jr",
		relationship: "brother",
		age: 31,
	},
	{
		name: "Benji",
		relationship: "brother",
		age: 22,
	},
	{
		name: "Naomi",
		relationship: "sister",
		age: 19,
	},
	{
		name: "Silda",
		relationship: "mother",
		age: 56,
	},
	{
		name: "Hector",
		relationship: "dad",
		age: 57,
	},
	{
		name: "Lourdes",
		relationship: "mother-in-law",
		age: 55,
	},
	{
		name: "Jose",
		relationship: "father-in-law",
		age: 56,
	},
	{
		name: "Ivan",
		relationship: "brother-in-law",
		age: 36,
	},
	{
		name: "Edith",
		relationship: "sister-in-law",
		age: 33,
	},
	{
		name: "Jennifer",
		relationship: "sister-in-law",
		age: 28,
	},
	{
		name: "Raissa",
		relationship: "sister-in-law",
		age: 35,
	},
	{
		name: "Angie",
		relationship: "niece",
		age: 18,
	},
	{
		name: "Heidi",
		relationship: "niece",
		age: 4,
	},
	{
		name: "Andrew",
		relationship: "friend",
		age: 34,
	},
	{
		name: "Daniel",
		relationship: "friend",
		age: 23,
	},
	{
		name: "Jennifer",
		relationship: "friend",
		age: 22,
	}
];


people.forEach( function(person, index)  {
	var number = index+1;
	console.log(number, person);
});

// Here we took out the function that the forEach loop uses, it has three things that it does, gets the name, index and fullArray. Here we are only using the first two. Since it is a function, we gave it a name, printPeople. Now we can replace everything we wrote out at the top and just put in the function name.
function printPeople (person, index, fullArray)  {
	var number = index+1;
	console.log(number, person);
};

// Here is the forEach with the function name from above, it works, console show the list twice
people.forEach( printPeople);


family.forEach( function(person) {
	console.log(person.name); // You have to use .name because it needs to go into the object and get the key that is named  'name' to get the name.
});

// if you want to get the relationship along with the name you add the .relationship after person to access it, as such
family.forEach( function(person) {
	console.log(person.name);
	console.log(person.relationship);
	console.log(""); // create a space in between each person and relationship
});

// to make it more clear on the console you can also write it like this
family.forEach( function(person) {
	console.log("This is " + person.name + " and they are my " + person.relationship + ".");
});

console.log(""); // create a space in between


// Here is how to make a unique list
// Use pseudocode to help think thru the process

family.forEach( function(person) {
	// if family member is a brother
	if (person.relationship == "brother") {
		// put it on list
		console.log(person.name);
	}
});

console.log(""); // create a space in between

// What if I wanted to make a list that didn't include my brothers. You change the == to !=.
family.forEach( function(person) {
	// if family member is a brother
	if (person.relationship != "brother") {
		// put it on list
		console.log(person.name);
	}
});

console.log(""); // create a space in between

// what if I wanted to do my parents and siblings only, I would add "sister", "father", and "mother" in the conditional 
family.forEach( function(person) {
	// if family member is a brother, sister, dad or mother
	if (person.relationship == "brother" || person.relationship =="sister" || person.relationship =="dad" || person.relationship =="mother") {
		// put it on list
		console.log(person.name);
	}
});





// FILTER how to use it 
//array.filter()

// create a variable so that when you call it, it shows you your new list that is filtered

var sisterInLaws = family.filter( function(item) {
	return item.relationship == "sister-in-law";
});

console.log(sisterInLaws);

// Challenge 
// create a function that accepts an array and generates markup
// must have heading and create a list of the items

function buildList(arrays, heading) {
	var h2 = document.createElement('h2');
	h2.textContent = heading;
	document.body.appendChild(h2);

	var ol = document.createElement('ol');

	arrays.forEach( function(item) {
		var li = document.createElement('li');
		li.textContent = item.name;
		ol.appendChild(li)
	});

	document.body.appendChild(ol);
};

buildList(sisterInLaws, "Here are my sister in laws");





// ARRAY.FROM how to use it
// Array.from() converst a string into an array

console.log(Array.from(family));

console.log(Array.from("Family"));





// ARRAY.ISARRAY how to use it
// Array.isArray checks if the passes value is an array

console.log(Array.isArray(family)); // true

console.log(Array.isArray("Family")); //false





// ARRAY.LENGTH how to use it
// array.length represent the number of elements in an array

console.log(family.length); // 19

family.length = 25;

console.log(family); // it changes the length to 25 even if there is only 19

// if (family.length >= 10) {
// 	family.length = 10;
// }
console.log(family); // it only shows the first 10 since I shorten the length and deleted the rest
console.log(family.length); // 10
console.log(family[11]); // undefined





// ARRAY.PUSH how to use it
// array.push adds one or more elements to the end of an array and returns thenew lenght of the array


//reset the family lenght to normal
family.length = 19;


family.push({name: "Thor", relationship: "son", age: 1});
console.log(family);

// you can push one array to another array

var sodas = ["coke", "sprite"];
var juices = ["apple", "orange"];

sodas.push(...juices); // it should give you all the elements into arrayOne

console.log(sodas); // ["coke", "sprite", "apple", "orange"]






// ARRAY.SHIFT how to use it
// array.shift removes the first element from an array and returns that removed element. This method changes the length of the array.

// var removed = family.shift(); it remove Steve from the top, I can show it using the removed since it is a variable

// console.log(family);
// console.log(removed);





// ARRAY.JOIN how to use it
// array.join() creates and returns a new string by concatenating all of the elements in an array, separated by commas or a specified separator string.

console.log(sodas.join("-")); // coke-sprite-apple-orange





// ARRAY.REVERSE how to use it
// array.reverse reverses an array in place and returns the reference to the same array, the first array element now becomes the last, the last array element becomes the first. This changes the array

console.log(family.reverse()); // reversed the order
console.log(family.reverse()); // I reversed the order back to the original way





// ARRAY.FIND how to use it
// array.find() returns the first element in the provided array that satisfies the provided testing function.

// create a function to isolate what we are looking for
function myName(name) {
	return name.name === "Steve";
}

console.log(family.find(myName)); // {name: 'Steve', relationship: 'self', age:32}

var sisterInLaws = family.find( function(item) {
	return item.relationship == "sister-in-law";
});

console.log(sisterInLaws); // {name: 'Edith', relationship: "sister-in-law", age: 33}



// ARRAY.MAP how to use it
// array.map creates a new array populated with the results of calling a provided function on every element in the calling array. 

// not sure how to use it without numbers





// ARRAY.REDUCE how to use it
// array.reduce ...

// didn't understand it, need to talk to someone about it




// JAVASCRIPT TRICKS

// How to make a button to switch between two things
// Here I am using the button to switch between a background color and font color.

// create a variable selecting the body
var body = document.querySelector('body');

// create a variable selecting the button in the document
var toggle = document.querySelector('button');

// create a function that adds a class to the button
function toggleColor() {
	body.classList.toggle('fancy');
}

// you add an event listener to the button and you tell it to switch to the button that has the class on it which shows the new 
toggle.addEventListener('click', toggleColor);




var body = document.querySelector('body');

// add a listener to the whole body!
body.addEventListener('click', function(event) {

	// if the click happens on the toggle button...
	if ( event.target.matches('[rel="toggle"]') ) {
		body.classList.toggle('menu-open');
	}

});





















