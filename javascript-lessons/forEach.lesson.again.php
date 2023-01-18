<!doctype html>

<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>JS lessons again</title>

		<link rel='stylesheet' href='styles.css'>
	</head>

	<body>
		<header>
			
		</header>

		<main>

			<button>Toggle Class Button</button>


			<button rel='toggle'>Toggle menu</button>

			<nav class='menu'>
				<a href='#'>Thing one</a>
				<a href='#'>Thing two</a>
				<a href='#'>Thing three</a>

				<button rel='toggle'>Close menu</button>
			</nav>

			<h1>Learning JavaScript</h1>

		</main>

		<footer>
			
		</footer>

		<script>
			var name = "Steve";
			console.log(name);

			var total = 200*5*2;
			console.log("Total:", total);

			var exampleArray = ["yellow", "orange", "red"];
			var otherArray = ["Hector", "Benji", "Naomi"];

			console.log(exampleArray);
			console.log("This is the color ", exampleArray[1]);
			console.log('array length', exampleArray.length);


			// Building a simple function to show it on the console, whatever you put in the name, it will run it inside the function. 
			function shoutName(name) {
				console.log("I am " + name + "!!!!!!");
			}

			shoutName("Steve");

			// This is how you use a for loop or is it a forEach loop?

			for (var i = 0 /*Setup*/; i < exampleArray.length/*Condition*/; i++/*Increment*/) {
				console.log('i', i);
				console.log('i', exampleArray[i]);
				console.log('----->', exampleArray[i]);
				shoutName(exampleArray[i]);
			}
			// Building a function to do everything that is on top, mainly the function and exampleArray.
			function doThings(anArray, aFunction) {
				for (var i = 0; i < anArray.length; i++) {
					aFunction(anArray[i], i); // I added i+1 so when it grabs the index it adds one since it starts at 0
				}
			}

			doThings(exampleArray, shoutName);

			// Now we are building a function that will print the list on to the screen

			// Original printItem function
			// function printItem(item) {
			// 	var listItem = document.createElement('li');
			// 	listItem.textContent = item;
			// 	listItem.classList.add("item");
			// 	document.body.appendChild(listItem);
			// }


			// Using the second function we built and putting the third function in it to see it print on the document.
			doThings(exampleArray, printItem);

			console.log("Nice");

			//This function adds an index to give the items an order list number. You update the doThings functions and add a second thing in the function. When adding the second thing, it will use it or not depending on the funtion you put in it.
			function printItem(item, index) {
				var listItem = document.createElement('li');
				listItem.textContent = index+1 + ". " + item; // added the index to the content to show.
				listItem.classList.add("item");
				document.body.appendChild(listItem);
			}

			// In this forEach loop you use the array at the beginning and then you use forEach after it. Inside the forEach there is a function. Inside that function there is three things you can pass. They are (items in the array, the index number of the array item, the whole array itself). You use this to be able to show a list. The items inside the function can be called whatever, just make sure they are used correctly inside the function. This is seen in the console
			otherArray.forEach(function(one, two) {
				console.log(two+1 + ". " + one);
				}
			);
			
			
			// This function works essential the same as our doThings function. I was able to put in the printItem function inside this new forEach. No need to write a doThings function. Just write a function like printItem to do what you need it to do. This prints it in the page. 
			otherArray.forEach(function(one, two) {
				printItem(one, two);
			}); 



			function renderItem(item, index) {
				console.log(index+1 + "... " + item);
			}

			//This looks like a short hand for the one I just did above, but instead of writing out the function with one and two, then writing the second function with one and two. You can just write out the function inside where the first function goes. 
			otherArray.forEach(renderItem);
			otherArray.forEach(printItem);

			// Time to practice all this

			var peopleData = [
				{
					name: "Asa",
					screens: "two",
				},
				{
					name: "AJ",
					screens: "two",
				},
				{
					name: "Josh",
					screens: "one",
				},

			];

			peopleData.forEach(function(one) {
				console.log(one.name + " is using " + one.screens + " screens.");
			});

			function printNames(item) {
					var listItem = document.createElement('li');
					listItem.textContent = item.name + " is using " + item.screens + " screens.";
					document.body.appendChild(listItem);
			};

			peopleData.forEach(printNames);

			// You can use the length of the array to just say anything. Here I added a sentence and used the count variable to show the number of times it will repeat itself. Since the exampleArray only has three items, it only repeats 3 times.

			var count = 1;

			exampleArray.forEach(function(){
				console.log(`Hello, lets count, this is number ${count++}`);
			});

			// you can also make a function of the sentence and just put it inside the forEach function section 

			function hello() {
				console.log(`Hello, lets count, this is number ${count++}`);
			};

			otherArray.forEach(hello);

			// How to use for loop

			// for ( setup; condition; whatChanges ) {
			// 	// do this
			// }

			for (var count = 0 /* setup */; count < 10 /* condition */; count++ /* what changes */) {
				console.log(count); // the count goes from 0 to 9
			}

			// If I want it to go from 1 to 10 there are two ways I can do it.

			// I can change the count to start at 1 and end at 11
			for (var count = 1; count < 11; count++) {
				console.log(count); // the count goes from 1 to 10
			}

			// or I can leave the count to start at 1 and and the count be greater and equal to 10
			for (var count = 1; count <= 10; count++) {
				console.log(count); // the count goes from 1 to 10
			}

			// When to use let instead of var

			// let keeps the reference name to scope to that for loop you are using it in. It doesn't transfer globally to the other functions. If you are using let count = 0, and use let count = 1 some where else, it won't overwrite it. 'let' is good to use in those situations where you need to use the same reference name more than once. 

			// in the example below, we are using count in two different for loops, in order to make sure they don't overwrite each other, instead of using var we use let. var sets it up as a global scope and let sets it up as a function scope, which won't leak into other functions.

			for (let count = 1; count <= 10; count++) {
				console.log(count);
			}

			var catsData = ['crunchy', 'scratchy', 'softy', 'growley', 'sniffer'];

			for ( let count = 0; count < catsData.length; count++) {
				console.log( catsData[count]);
			}

			function listCats(cats) {
				for ( let count = 0; count < cats.length; count++) {
				console.log( cats[count]);
				}
			}

			listCats(catsData);

			// How do you get an individual cat, lets say a favorite cat
			// updata the cats data to be ablet to pick a cat

			var catsDataTwo = [
				{
					id: "0",
					name:	'crunchy', 
				},
				{
					id: "1",
					name:	'scratchy', 
				},
				{
					id: "2",
					name:	'softy', 
				},
				{
					id: "3",
					name:	'growley', 
				},
				{
					id: "4",
					name:	'sniffer',
				}
			];

			function favoriteCat(cats, id) {
				for ( let index = 0; index < cats.length; index++) {
					if( cats[index].id == id ) {
						return cats[index].name;
					}
				}
			}

			console.log('fav', favoriteCat(catsDataTwo,"2"));

			// if you want to loop thru an array but stop the loop after you found what you are looking for, this would be a great way to do that

			// outside the if statement you write the name of the cats. When you run the function, it will show all the cats until you find the one you were looking for. 

			function favoriteCat(cats, id) {
				for ( let index = 0; index < cats.length; index++) {
					if( cats[index].id == id ) {
						return cats[index].name;
					}
					console.log(cats[index].name)
				}
			}

			console.log('fav', favoriteCat(catsDataTwo,"2"));

			// Using while statement - creates a loop that executes a specified statement as long as the test condition evaluates to true. The condition is evalutated before executing the statement.

			var i = 0;

			while(i < 5) {
				i++
			}

			console.log(i);

			// we use the break statement if you want to break the loop once it gets to the one you want

			var p = 0;
			while(p < 5) {
				if (p === 3) {
					break;
				}
				p++;
			}

			console.log(p);

			// the do...while statement - creates a loop that executes a specific statement until the test condition evaluates to false. The condition is evaluated after executing the statement, resulting in the specified statement executing at least once.

			let result = '';
			let k = 0;

			do {
			  k = k + 1;
			  result = result + k;
			} while (k < 5);

			console.log(result);
			// Expected output: "12345"

			let resultTwo = "";
			let e = 0;
			do {
			  e += 1;
			  resultTwo += `${e} `;
			} while (e > 0 && e < 5);
			// Despite e === 0 this will still loop as it starts off without the test

			console.log(resultTwo);

			// for...in statement - iterates a specified variable over all the enumerable properties of an object. 

			// for (variable in object)
			// statement

			function dumpProps(obj, objName) {
			  let result = '';
			  for (const i in obj) {
			    result += `${objName}.${i} = ${obj[i]}<br>`;
			  }
			  result += '<hr>';
			  return result;
			}

			// need help with this one not getting it.


			// Here is an example of the difference between for...in and for...of. The for...in itereates over property names, for...of iterates over the property values:

			const arr = [3, 5, 7];
			arr.foo = 'hello';

			for (const i in arr) {
			  console.log(i);
			}
			// "0" "1" "2" "foo"

			for (const i of arr) {
			  console.log(i);
			}
			// Logs: 3 5 7

			for (const i of arr.foo) {
			  console.log(i);
			}
			// Logs: h e l l o , all separate



		</script>

		<script src='more.forEach.filter.lesson.again.js'></script>
			

	</body>

</html>