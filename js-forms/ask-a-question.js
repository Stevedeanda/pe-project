


// Get the form
var $form = document.querySelector("#ask-a-question");

// Get the inputs
var $person = document.querySelector("[name='person']");
var $email = document.querySelector("[name='email']");
var $text = document.querySelector("[name='text']"); 

// Get the outcome
var $paragraph = document.querySelector("#output-two");	

// Make sure PHP form doesn't send it to the server when it submits.
$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	//console.log("submit was clicked");


	// Put a value to the inputs
	let person = $person.value;
	let email = $email.value;
	let text = $text.value;

	// Write the outcome message
	var message = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>An email was sent to <span>${email}</span> please verify email by clicking on link. We will get to your inquiry of <span>"${text}"</span> as soon as possible. Thank you for reaching out to us <span>${person}</span> and have a great day!`;

	// Remove and add class to be able to see the outcome
	$paragraph.classList.remove('hide');
	$paragraph.classList.add('visible');
	
	// Add the message to page
	$paragraph.innerHTML = message;


});







// Get the form
var $formTwo = document.querySelector("#calculate-paycheck");

// Get the inputs
var $work = document.querySelector("[name='work']");
var $rate = document.querySelector("[name='rate']");

// Get the outcome
var $outcome = document.querySelector("#outcome");

$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	//console.log("looks like it clicked");

	// Put a value to the inputs
	let work = $work.value;
	//console.log(work);
	let rate = $rate.value;
	//console.log(rate);
	let paycheck = work * rate
	//console.log(paycheck);

	// Write the outcome message
	var messageTwo = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>You worked <span>${$work}</span> hours and got paid <span>\$${$rate}</span> an hour. Looks like you made <span>\$${$paycheck}</span> for the week.`;

	// Remove and add class to be able to see the outcome
	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');
	
	// Add the message to page
	$outcome.innerHTML = messageTwo;


});