

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
		var message = `Hi, ${input}, it's nice to meet you.`;
	} else {
		var message = `Please enter your name.`
	}

	$output.innerHTML = message;
})