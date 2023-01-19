
// ASK A QUESTION FORM

// Get the form
var $form = document.querySelector("form");

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





// CALCULATE PAYCHECK FORM

// Get the form
var $form = document.querySelector("form");

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
	var messageTwo = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>You worked <span>${work}</span> hours and got paid <span>\$${rate}</span> an hour. Looks like you made <span>\$${paycheck}</span> for the week.`;

	// Remove and add class to be able to see the outcome
	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');
	
	// Add the message to page
	$outcome.innerHTML = messageTwo;


});




// CALCULATE BERRIES

// Get the form
var $form = document.querySelector("form");

// Get the inputs
var $guests = document.querySelector("[name='guests']");
var $berries = document.querySelector("[name='berries']");

// Get the outcome
var $outcome = document.querySelector("#outcome");

$form.addEventListener('submit', function(myEvent) {

	myEvent.preventDefault();

	console.log("alright alright alright");

	// Put a value to the inputs
	let guests = $guests.value;
	console.log(guests);
	let berries = $berries.value;
	console.log(berries);
	let total = guests * berries;
	console.log(total);

	// Write the outcome message
	var messageThree = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>We will need <span>${berries}</span> berries per guest. Since there is <span>${guests}</span> guests, we will need a total of <span>${total}</span> berries.`;

	// Remove and add class to be able to see the outcome
	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');
	
	// Add the message to page
	$outcome.innerHTML = messageThree;
});






// DRINKING AGE FORM

// Get the form 
var $form = document.querySelector("form");

//Get the inputs
var $born = document.querySelector("[name='born']");

// Get the outcome
var $outcome = document.querySelector("#outcome");

// Prevent the form from submitting
$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	console.log("js is working");

	// Put the value to the inputs
	let born = $born.value;
	console.log(born);
	let currentYear = 2022;
	let age = currentYear - born;
	console.log(age);

	// Write the outcome message
	if (age >= 21) {
		var messageOne = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>You were born in <span>${born}</span>. You are <span>${age}</span> years old, you can drink buddy!`;

		// Remove and add class to be able to see the outcome
		$outcome.classList.remove('hide');
		$outcome.classList.add('visible');
		
		// Add the message to page
		$outcome.innerHTML = messageOne;

	} else {
		var messageTwo = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>You were born in <span>${born}</span>. You are <span>${age}</span> years old, drinking age is 21, no alcohol for you.`;

		// Remove and add class to be able to see the outcome
		$outcome.classList.remove('hide');
		$outcome.classList.add('visible');
		
		// Add the message to page
		$outcome.innerHTML = messageTwo;
	}
});






