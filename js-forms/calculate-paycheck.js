
console.clear();

// Get the form
var $formTwo = document.querySelector("#calculate-paycheck");

// Get the inputs
var $work = document.querySelector("[name='work']");
var $rate = document.querySelector("[name='rate']");

// Get the outcome
var $outcome = document.querySelector("#outcome");

$formTwo.addEventListener('submit', function(myEvent) {
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