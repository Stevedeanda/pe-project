// Get the form
var $form = document.querySelector("#ask-a-question");
var $person = document.querySelector("[name='person']");
var $email = document.querySelector("[name='email']");
var $text = document.querySelector("[name='text']"); 
var $paragraph = document.querySelector("#output-two");	


$form.addEventListener('submit', function(myEvent) {
	myEvent.preventDefault();

	//console.log("submit was clicked");

	let person = $person.value;
	let email = $email.value;
	let text = $text.value;

	var message = `This is to show what you submitted, the text highlighted in orange is what you input.<hr>An email was sent to <span>${email}</span> please verify email by clicking on link. We will get to your inquiry of <span>"${text}"</span> as soon as possible. Thank you for reaching out to us <span>${person}</span> and have a great day!`;

	$paragraph.classList.remove('hide');
	$paragraph.classList.add('visible');
	
	$paragraph.innerHTML = message;

});