
// Get Form
var $form = document.querySelector('form');

// Get inputs
var $quote = $form.querySelector("[name='quote']");
var $author = $form.querySelector("[name='author']");

// Get output
var $output = document.querySelector('output');

$form.addEventListener('submit', function(click) {
	click.preventDefault();
	console.log("is this working?");

	let quote = $quote.value;
	let author = $author.value

	if (quote.length > 0 && author.length > 0) {
		var message = `${author} said, "${quote}.";`
		$output.innerHTML = message;
	} else {
		var errorMessage = "You are missing the quote or the author.";
		$output.innerHTML = errorMessage;
	}

})