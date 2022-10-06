<!doctype html>

<html lang="en">

	<style>

		button {
			display: grid;
		}
		
	</style>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>JavaScript e4p</title>
	</head>

	<body>
		<header>
			
		</header>

		<main>

			<h1>Learning JavaScript</h1>

			<h2>Exercises for Programmers using JS</h2>
			
		</main>

		<script>

			// Hello
			function human() {
			    var person = prompt('what is your name?');
			    if (person) {
			        var message = "Hello, " + person + ", it is nice to meet you.";
			        alert(message);
			    }
			}

			var firstbutton = document.createElement('button');
			firstbutton.textContent = "Saying Hello";
			firstbutton.addEventListener('click', human);
			document.body.appendChild(firstbutton);
			
			//Counting Characters
			function characters() {
			    var words = prompt('Write a word in here');
			    var counter = words.length;
			    var output2 = "You wrote " + words + " and that has " + counter + " characters."
			    alert(output2);
			}

			var secondbutton = document.createElement('button');
			secondbutton.textContent = "Character Counting";
			secondbutton.addEventListener('click', characters);
			document.body.appendChild(secondbutton);

			// Printing Quotes
			function quotes() {
				alert('The next prompts will ask you for a quote and the author of the quote. Think of one and answer the prompts accordingly');
				var quote = prompt('Write a quote you know or heard');
				var author = prompt('Write the author of that quote');
				var output3 = "\"" + quote + "\"" + " by " + author + ".";
				alert(output3);
			}

			var thirdbutton = document.createElement('button');
			thirdbutton.textContent = "Printing Quotes";
			thirdbutton.addEventListener('click', quotes);
			document.body.appendChild(thirdbutton);

			


		</script>

	</body>

</html>