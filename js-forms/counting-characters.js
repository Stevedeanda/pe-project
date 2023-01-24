
// Get Form
var $form = document.querySelector('form');

// Get inputs
var $input = $form.querySelector('input');

// Get output
var $output = document.querySelector('output');

$form.addEventListener('submit', function(click) {
	click.preventDefault();
	console.log("is this working?");

	let input = $input.value;

	if (input.length > 0) {
		var message = `You wrote ${input} and that has ${input.length} characters.`;
		$output.innerHTML = message;
	} else {
		var errorMessage = `Please enter a string of words together.`;
		$output.innerHTML = errorMessage;
	}

})