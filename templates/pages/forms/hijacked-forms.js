
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

	//console.log("alright alright alright");

	// Put a value to the inputs
	let guests = $guests.value;
	//console.log(guests);
	let berries = $berries.value;
	//console.log(berries);
	let total = guests * berries;
	//console.log(total);

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

	//console.log("js is working");

	// Put the value to the inputs
	let born = $born.value;
	//console.log(born);
	let currentYear = 2022;
	let age = currentYear - born;
	//console.log(age);

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





// Next form .... counting characters...get to it


// COUNTING CHARACTERS

// Get the form
var $form = document.querySelector('form');

// Get the inputs
var $string = document.querySelector("[name='string']");

// Get the output
var $outcome = document.querySelector("#outcome");

$form.addEventListener('submit', function(myEvent){
	myEvent.preventDefault();

	// Get the value 
	let string = $string.value;
	let length = string.length;

	var message = `This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.<hr>You entered <span>${string}</span> and it has <span>${length}</span> characters.`

	// Add and remove class to show output
	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');

	// Show message
	$outcome.innerHTML = message;

});







// PIZZA PARTY FORM

// Get form
var $form = document.querySelector('form');

var $people = document.querySelector("[name='people']");
var $pizza = document.querySelector("[name='pizza']");

var $outcome = document.querySelector("#output");

$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	let people = $people.value;
	let pizza = $pizza.value;
	//console.log(people, pizza);
	let slices = pizza * 8;
	let total = Math.trunc(slices / people);
	let leftOver = (slices - (total * people));
	//console.log(total);
	//console.log(leftOver);

	var message = `This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.<hr>Number of guests? <span>${people}</span>. Number of pizzas ordered? <span>${pizza}</span>. Each pizza comes with 8 slices, we will have <span>${slices}</span> slices in total. Each person gets <span>${total}</span> slices of pizza. There will be <span>${leftOver}</span> slices of pizza leftover.`;

	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');
	$outcome.innerHTML = message;
});






// PAINT CALCULATOR FORM

// Get Form
var $form = document.querySelector('form');

var $length = document.querySelector("[name='length']");
var $width = document.querySelector("[name='width']");

var $outcome = document.querySelector("#outcome");

$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	let length = $length.value;
	let width = $width.value;
	let sf = length * width;
	let paint = sf/350;
	let gallons = Math.ceil(paint);

	var message = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>You will need to purchase <span>${gallons}</span> gallons of paint to cover <span>${sf}</span> square feet.`;

	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');
	$outcome.innerHTML = message;

});






// SELF-CHECKOUT FORM

// Get form
var $form = document.querySelector('form');

var $softball = document.querySelector("[name='softballQ']");
var $tablet = document.querySelector("[name='tabletQ']");
var $shirt = document.querySelector("[name='shirtQ']");

var $outcome = document.querySelector("#outcome");

$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	let softballQ = $softball.value;
	let tabletQ = $tablet.value;
	let shirtQ = $shirt.value;
	let softballTotal = Number(softballQ * 5.99).toFixed(2);
	//console.log(softballTotal);
	let tabletTotal = Number(tabletQ * 49.99).toFixed(2);
	//console.log(tabletTotal);
	let shirtTotal = Number(shirtQ * 11.99).toFixed(2);
	//console.log(shirtTotal);
	let subtotal = (parseFloat(softballTotal) + parseFloat(tabletTotal) + parseFloat(shirtTotal)).toFixed(2);
	//console.log(subtotal);
	let taxes = (parseFloat(subtotal) * (5.5/100)).toFixed(2);
	//console.log(taxes);
	let total = (parseFloat(subtotal) + parseFloat(taxes)).toFixed(2);
	//console.log(total);

	var message = `This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.<hr>Softball total: <span>$${softballTotal}</span><br>Softball quantity: <span>${softballQ}</span><br>Tablet total: <span>$${tabletTotal}</span><br>Tablet quantity: <span>${tabletQ}</span><br>T-Shirt total: <span>$${shirtTotal}</span><br>T-Shirt quantity: <span>${shirtQ}</span><br>Subtotal: <span>$${subtotal}</span><br>Tax: <span>$${taxes}</span><br>Total: <span>$${total}</span>`;

	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');
	$outcome.innerHTML = message;

});






// COMPUTING SIMPLE INTEREST FORM

// Get form
var $form = document.querySelector('form');

var $principal = document.querySelector("#principal");
var $percent = document.querySelector("#percent");
var $years = document.querySelector("#years");

var $outcome = document.querySelector("#outcome");

$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	let principal = Number($principal.value);
	let percent = Number($percent.value);
	let years = Number($years.value);

	let getPercent = (percent/100).toFixed(3);
	//console.log(getPercent);
	let getMath = (1 + (getPercent * years)).toFixed(3);
	//console.log(getMath);
	let invest = (principal * getMath).toFixed(2);
	//console.log(invest);

	var message = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>Entered Principal amount: <span>$${principal}</span><br>Entered rate of interest: <span>${percent}%</span><br>Entered number of years: <span>${years}</span><br><br>After <span>${years}</span> years at <span>${percent}%</span>, the investment will be worth <span>$${invest}</span>.`;

	$outcome.classList.remove('hide');
	$outcome.classList.add('visible');
	$outcome.innerHTML = message;

});






// DETERMINING COMPOUND INTEREST FORM

// Get form
var $form = document.querySelector('form');

var $principalTwo = document.querySelector("#principalTwo");
var $percentTwo = document.querySelector("#percentTwo");
var $yearsTwo = document.querySelector("#yearsTwo");
var $period = document.querySelector("#period");

var $outcomeTwo = document.querySelector("#output");

$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	let principalTwo = Number($principalTwo.value);
	let percentTwo = Number($percentTwo.value);
	let yearsTwo = Number($yearsTwo.value);
	let period = Number($period.value);

	let getPercentTwo = (percentTwo/100).toFixed(3);
	//console.log(getPercentTwo);
	let getMathTwo = (1 + (getPercentTwo / period));
	//console.log(getMathTwo);
	let getExponent = (getMathTwo ** (period * yearsTwo));
	//console.log(getExponent);
	let investTwo = (principalTwo * getExponent);
	//console.log(investTwo);
	let round = investTwo.toFixed(2);
	//console.log(round);

	var message = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>Entered Principal amount: <span>$${principalTwo}</span><br>Entered rate of interest: <span>${percentTwo}%</span><br>Entered number of years: <span>${yearsTwo}</span><br>Entered number of times is compounded per year: <span>${period}</span><br><br><span>${principalTwo}</span> invested at <span>${percentTwo}%</span> for <span>${yearsTwo}</span> years compounded <span>${period}</span> times per year is <span>$${round}</span>.`;

	$outcomeTwo.classList.remove('hide');
	$outcomeTwo.classList.add('visible');
	$outcomeTwo.innerHTML = message;
});






// TAX CALCULATOR FORM

// Get Form
var $form = document.querySelector('form');

var $order = document.querySelector("[name='order']");
var $states = document.querySelector("#states");

var $output = document.querySelector("#output");

$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	let order = Number($order.value);
	//console.log(order);
	let state = $states.value;
	//console.log(state);

	if (state == "WI") {
		let percentRate = .055;
		let orderTax = (percentRate * order).toFixed(2);
		//console.log(orderTax);
		let orderTotal = order + Number(orderTax);
		//console.log(orderTotal);

		var messageOne = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>The state you are in: <span>${state}</span><br>The subtotal amount: <span>$${order}</span><br>The tax on your order: <span>$${orderTax}</span><br>Total for your order: <span>$${orderTotal}</span>`;

		$output.classList.remove('hide');
		$output.classList.add('visible');
		$output.innerHTML = messageOne;
	} else {
		var messageTwo = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>The state you are in: <span>${state}</span><br>No state tax, your order total is:  <span>$${order}</span>`;

		$output.classList.remove('hide');
		$output.classList.add('visible');
		$output.innerHTML = messageTwo;
	}
});




// LOGIN FORM

// Get the form
var $form = document.querySelector('form');

// Get the inputs

var $id = document.querySelector("[name='id']");
var $pw = document.querySelector("[name='pw']");

var $output = document.querySelector("#message");

// const rain = json_encode($userData);

let text = '{"users":[' +
'{"id":"betsy","pw":"Betsy" },' +
'{"id":"steve","pw":"Steve" },' +
'{"id":"john","pw":"John" }]}';

const obj = JSON.parse(text);
console.log(obj.users[0].id);

// Get the output 

// Prevent the default submit
$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	// Get the value
	let id = $id.value;
	let pw = $pw.value;

	if (id == obj.users[0].id) {
		var message = "You did it!!!";
		$output.innerHTML = message;
		console.log("yay");
	} else {
		var errorMessage = "Uh oh";
		$output.innerHTML = errorMessage;
		console.log(obj.users[0].id);
	}


})






















































