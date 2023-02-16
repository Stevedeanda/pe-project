// this is where I will write everything out before I start to take it apart into modules. 


// Gather infomation and set things up

const $field = document.querySelector("field");
const $outlet = document.querySelector("[data-outlet='main']");

var pages = {};
var users = [];
var personId = 0;
var message = "";



// Write the logic for the app

function screenChange(name) {
	console.log("set screen: ", name);

	$outlet.innerHTML = pages[name]; // page change
}

// screenChange("welcome"); // default page

function add(name, username, password) {
	const person = {
		id: `c-00${personId++}`,
		name,
		username,
		password,
	};

	users = [...users, person];
	console.log(users);
}


// Keeping the rendering separate


pages.welcome = 
`<h1>Camping App</h1>

<field>
	<button data-screen="login" data-color="wheat">Login</button>
	<button data-screen="create" data-color="teal">CreateLogin</button>
</field>`;
pages.login = 
	`<h1>Camping App</h1>
	<form>
		<div>
			<label for="a">Username</label>
			<input id="a" type="text">
		</div>
		<div>
			<label for="b">Password</label>
			<input id="b" type="text">
		</div>

		<button type="submit">Submit</button>
	</form>
	<field>
		<button data-screen="welcome" data-color="wheat">back</button>
	</field>`;

pages.create = 

	`<h1>Camping App</h1>
	<form data-form="create">
		<div>
			<label for="c">First Name</label>
			<input id="c" type="text">
		</div>
		<div>
			<label for="a">Create Username</label>
			<input id="a" type="text">
		</div>
		<div>
			<label for="b">Create Password</label>
			<input id="b" type="text">
		</div>

		<button type="submit">Create</button>
	</form>
	<p></p>
	<field>
		<button data-screen="welcome" data-color="wheat">back</button>
	</field>`;



// Setup event listeners


window.addEventListener('click', function(event) {

	if (event.target.matches("[data-screen]")) {
		screenChange(event.target.dataset.screen);
		console.log('...');
	}

});

window.addEventListener('click', function (event) {
	event.preventDefault();
	
	const $formCreate = document.querySelector("[data-form='create']");
	const $firstName = $formCreate.querySelector("#c");
	const $userName = $formCreate.querySelector("#a");
	const $password = $formCreate.querySelector("#b");
	const $text = $formCreate.querySelector("p");
	var message = "Great, you can go back and login now.";

	if (event.target.textContent == "Create") {
		add( $firstName.value, $userName.value, $password.value);
		$firstName.value = "";
		$userName.value = "";
		$password.value = "";
		console.log('Users: ', users);
		$text.innerHTML = message;

	}

	
});

