// this is where I will write everything out before I start to take it apart into modules. 


// Gather infomation and set things up

const $field = document.querySelector("field");
const $outlet = document.querySelector("[data-outlet='main']");

var pages = {};
var users = [];
var personId = 0;
var parkID = 0;

var parks = [
	{
		"name": "Colorado Bend",
		"id": "one"
	},
	{
		"name": "Utah Bend",
		"id": "two"
	},
	{
		"name": "California Bend",
		"id": "three"
	},
	{
		"name": "Texas Bend",
		"id": "four"
	},
	{
		"name": "Maine Bend",
		"id": "five"
	}	
]





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

function objectData(key, object) {
	data.setItem(key, JSON.stringify(object));
	const getPerson = data.getItem(key);
	console.log(JSON.parse(getPerson));
}

function renderPark(park) {
	return `
		<li data-park='${park.id}'>
			<park-card>
				<h2 data-screen='${park.id}'>${park.name}</h2>
			</park-card>
		</li>
	`;
}

function renderParks(parks) {
	var template = "<ul>";
	parks.forEach( function(park) {
		template += renderPark(park);
	});
	template += "</ul>";
	return template;
}


// Keeping the rendering separate


pages.welcome = 
`
 	<section></section>
		<inner-column>
			<h1>Camping App</h1>

			<field>
				<button data-screen="login">Login</button>
				<button data-screen="create">CreateLogin</button>
			</field>
		</inner-column>
	</section>
`;
pages.login = 
`
	<section>
	   <inner-column>
			<h1>Camping App</h1>
			<form>
				<div>
					<label for="a">Username</label>
					<input id="a" type="text">
				</div>
				<div>
					<label for="b">Password</label>
					<input id="b" type="text">
				</div>
		
				<button data-screen="main">Submit</button>
			</form>
			<field>
				<button data-screen="welcome">back</button>
			</field>
		</inner-column>	
	</section>
`;

pages.create = 

`
	<section>		
		<inner-column>
			<h1>Camping App</h1>
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

				<button data-screen="create">Create</button>
			</form>
			<p></p>
			<field>
				<button data-screen="welcome">back</button>
			</field>
		</inner-column>
	</section>
`;

pages.main = 

`
	<section>
		<inner-column>
			<header>
				<logo-icon>
					LOGO
				</logo-icon>
				<user-profile>
					Welcome, <a href="#">Steve</a>
				</user-profile>
			</header>
		</inner-column>
	</section>

	<section>
		<inner-column>
			<h1>Camping App</h1>
		</inner-column>
	</section>

	<section>
		<inner-column>
			${renderParks(parks)}
		</inner-column>
	</section>

	<section>
		<inner-column>
			<footer>
				<field>
					<button data-screen="welcome">LogOut</button>
				</field>
			</footer>
		</inner-column>
	</section>

`;

pages.one = 

`
	<h1>Colorado Bend Park</h1>
	<section>
		<inner-column>
			<footer>
				<field>
					<button data-screen="main">back to Main</button>
				</field>
			</footer>
		</inner-column>
	</section>
`;

pages.two = 

`
	<h1>Utah Bend Park</h1>
	<section>
		<inner-column>
			<footer>
				<field>
					<button data-screen="main">back to Main</button>
				</field>
			</footer>
		</inner-column>
	</section>
`;

pages.three = 

`
	<h1>California Bend Park</h1>
	<section>
		<inner-column>
			<footer>
				<field>
					<button data-screen="main">back to Main</button>
				</field>
			</footer>
		</inner-column>
	</section>
`;

pages.four = 

`
	<h1>Texas Bend Park</h1>
	<section>
		<inner-column>
			<footer>
				<field>
					<button data-screen="main">back to Main</button>
				</field>
			</footer>
		</inner-column>
	</section>
`;

pages.five = 

`
	<h1>Maine Bend Park</h1>
	<section>
		<inner-column>
			<footer>
				<field>
					<button data-screen="main">back to Main</button>
				</field>
			</footer>
		</inner-column>
	</section>
`;

// Setup event listeners


window.addEventListener('click', function(event) {

	if (event.target.matches("[data-screen]")) {
		screenChange(event.target.dataset.screen);
		console.log('...');
	}

	// if (event.target.matches("[data-screen='create']")) {

	// 	const $formCreate = document.querySelector("[data-form='create']");
	// 	const $firstName = $formCreate.querySelector("#c");
	// 	const $userName = $formCreate.querySelector("#a");
	// 	const $password = $formCreate.querySelector("#b");
	// 	const $text = $formCreate.querySelector("p");
	// 	var message = "Great, you can go back and login now.";

	// 	$formCreate.addEventListener('click', function(event) {
	// 		preventDefault()
	// 		console.log("works...")
	// 		if (event.target.textContent == "Create") {
	// 			console.log("works");
	// 		}

	// 	});
	// }

});

// window.addEventListener('click', function (event) {
// 	event.preventDefault();
	
// 	const $formCreate = document.querySelector("[data-form='create']");
// 	const $firstName = $formCreate.querySelector("#c");
// 	const $userName = $formCreate.querySelector("#a");
// 	const $password = $formCreate.querySelector("#b");
// 	const $text = $formCreate.querySelector("p");
// 	var message = "Great, you can go back and login now.";

// 	if (event.target.textContent == "Create") {
// 		add( $firstName.value, $userName.value, $password.value);
// 		$firstName.value = "";
// 		$userName.value = "";
// 		$password.value = "";
// 		console.log('Users: ', users);
// 		$text.innerHTML = message;

// 	}

	
// });

