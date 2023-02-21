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
		"id": "one",
		"pic": "images/home-page.JPG"
	},
	{
		"name": "Utah Bend",
		"id": "two",
		"pic": "images/home-page.JPG"
	},
	{
		"name": "California Bend",
		"id": "three",
		"pic": "images/home-page.JPG"
	},
	{
		"name": "Texas Bend",
		"id": "four",
		"pic": "images/home-page.JPG"
	},
	{
		"name": "Maine Bend",
		"id": "five",
		"pic": "images/home-page.JPG"
	}	
]





// Write the logic for the app

function screenChange(name) {
	console.log("set screen: ", name);

	$outlet.innerHTML = pages[name]; // page change
}

function showDate(date) {
	console.log("working");

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
		<li class='card' data-park='${park.id}'>
			<park-card>
				<h2 data-screen='${park.id}'>${park.name}</h2>
				<picture>
					<img src="${park.pic}" alt="">
				</picture>
			</park-card>
		</li>
	`;
}

function renderParks(parks) {
	var template = "<ul class='list'>";
	parks.forEach( function(park) {
		template += renderPark(park);
	});
	template += "</ul>";
	return template;
}


// Keeping the rendering separate


pages.welcome = 
`
 	<section class="start">
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
	<section class="nav">
		<inner-column>
			<header>
				<logo-icon>
					LOGO
				</logo-icon>
				<user-profile>
					Welcome, <a href="#"> Steve</a>
				</user-profile>
			</header>
		</inner-column>
	</section>

	<section>
		<inner-column>
			<h1>Camping App</h1>
		</inner-column>
	</section>

	<section class="park-list">
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
	<section class="nav">
		<inner-column>
			<header>
				<logo-icon>
					LOGO
				</logo-icon>
				<user-profile>
					Welcome, <a href="#"> Steve</a>
				</user-profile>
			</header>
		</inner-column>
	</section>

	<section>
		<inner-column>
			<h1 class="${parks[0].id}">${parks[0].name}</h1>
		</inner-column>
	</section>

	<section class="dates">
		<inner-column>
			<h2>February</h2>
			<ul class="calendar">
				<li class="a1"></li>
				<li class="b1"></li>
				<li class="c1"></li>
				<li class="d1">1</li>
				<li class="e1">2</li>
				<li class="f1">3</li>
				<li class="g1">4</li>
				<li class="a2">5</li>
				<li class="b2">6</li>
				<li class="c2">7</li>
				<li class="d2">8</li>
				<li class="e2">9</li>
				<li class="f2">10</li>
				<li class="g2">11</li>
				<li class="a3">12</li>
				<li class="b3">13</li>
				<li class="c3">14</li>
				<li class="d3">15</li>
				<li class="e3">16</li>
				<li class="f3">17</li>
				<li class="g3">18</li>
				<li class="a4">19</li>
				<li class="b4">20</li>
				<li class="c4">21</li>
				<li class="d4">22</li>
				<li class="e4">23</li>
				<li class="f4">24</li>
				<li class="g4">25</li>
				<li class="a5">26</li>
				<li class="b5">27</li>
				<li class="c5">28</li>
				<li class="d5"></li>
				<li class="e5"></li>
				<li class="f5"></li>
				<li class="g5"></li>
			</ul>
		</inner-column>
	</section>

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
	<section class="nav">
		<inner-column>
			<header>
				<logo-icon>
					LOGO
				</logo-icon>
				<user-profile>
					Welcome, <a href="#"> Steve</a>
				</user-profile>
			</header>
		</inner-column>
	</section>

	<section>
		<inner-column>
			<h1 class="${parks[0].id}">${parks[0].name}</h1>
		</inner-column>
	</section>

	<section class="dates">
		<inner-column>
			<h2>February</h2>
			<ul class="calendar">
				<li class="a1"></li>
				<li class="b1"></li>
				<li class="c1"></li>
				<li class="d1">1</li>
				<li class="e1">2</li>
				<li class="f1">3</li>
				<li class="g1">4</li>
				<li class="a2">5</li>
				<li class="b2">6</li>
				<li class="c2">7</li>
				<li class="d2">8</li>
				<li class="e2">9</li>
				<li class="f2">10</li>
				<li class="g2">11</li>
				<li class="a3">12</li>
				<li class="b3">13</li>
				<li class="c3">14</li>
				<li class="d3">15</li>
				<li class="e3">16</li>
				<li class="f3">17</li>
				<li class="g3">18</li>
				<li class="a4">19</li>
				<li class="b4">20</li>
				<li class="c4">21</li>
				<li class="d4">22</li>
				<li class="e4">23</li>
				<li class="f4">24</li>
				<li class="g4">25</li>
				<li class="a5">26</li>
				<li class="b5">27</li>
				<li class="c5">28</li>
				<li class="d5"></li>
				<li class="e5"></li>
				<li class="f5"></li>
				<li class="g5"></li>
			</ul>
		</inner-column>
	</section>

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
	<section class="nav">
		<inner-column>
			<header>
				<logo-icon>
					LOGO
				</logo-icon>
				<user-profile>
					Welcome, <a href="#"> Steve</a>
				</user-profile>
			</header>
		</inner-column>
	</section>

	<section>
		<inner-column>
			<h1 class="${parks[2].id}">${parks[2].name}</h1>
		</inner-column>
	</section>

	<section class="dates">
		<inner-column>
			<h2>February</h2>
			<ul class="calendar">
				<li class="a1"></li>
				<li class="b1"></li>
				<li class="c1"></li>
				<li class="d1">1</li>
				<li class="e1">2</li>
				<li class="f1">3</li>
				<li class="g1">4</li>
				<li class="a2">5</li>
				<li class="b2">6</li>
				<li class="c2">7</li>
				<li class="d2">8</li>
				<li class="e2">9</li>
				<li class="f2">10</li>
				<li class="g2">11</li>
				<li class="a3">12</li>
				<li class="b3">13</li>
				<li class="c3">14</li>
				<li class="d3">15</li>
				<li class="e3">16</li>
				<li class="f3">17</li>
				<li class="g3">18</li>
				<li class="a4">19</li>
				<li class="b4">20</li>
				<li class="c4">21</li>
				<li class="d4">22</li>
				<li class="e4">23</li>
				<li class="f4">24</li>
				<li class="g4">25</li>
				<li class="a5">26</li>
				<li class="b5">27</li>
				<li class="c5">28</li>
				<li class="d5"></li>
				<li class="e5"></li>
				<li class="f5"></li>
				<li class="g5"></li>
			</ul>
		</inner-column>
	</section>

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
	<section class="nav">
		<inner-column>
			<header>
				<logo-icon>
					LOGO
				</logo-icon>
				<user-profile>
					Welcome, <a href="#"> Steve</a>
				</user-profile>
			</header>
		</inner-column>
	</section>

	<section>
		<inner-column>
			<h1 class="${parks[3].id}">${parks[3].name}</h1>
		</inner-column>
	</section>

	<section class="dates">
		<inner-column>
			<h2>February</h2>
			<ul class="calendar">
				<li class="a1"></li>
				<li class="b1"></li>
				<li class="c1"></li>
				<li class="d1">1</li>
				<li class="e1">2</li>
				<li class="f1">3</li>
				<li class="g1">4</li>
				<li class="a2">5</li>
				<li class="b2">6</li>
				<li class="c2">7</li>
				<li class="d2">8</li>
				<li class="e2">9</li>
				<li class="f2">10</li>
				<li class="g2">11</li>
				<li class="a3">12</li>
				<li class="b3">13</li>
				<li class="c3">14</li>
				<li class="d3">15</li>
				<li class="e3">16</li>
				<li class="f3">17</li>
				<li class="g3">18</li>
				<li class="a4">19</li>
				<li class="b4">20</li>
				<li class="c4">21</li>
				<li class="d4">22</li>
				<li class="e4">23</li>
				<li class="f4">24</li>
				<li class="g4">25</li>
				<li class="a5">26</li>
				<li class="b5">27</li>
				<li class="c5">28</li>
				<li class="d5"></li>
				<li class="e5"></li>
				<li class="f5"></li>
				<li class="g5"></li>
			</ul>
		</inner-column>
	</section>

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
	<section class="nav">
		<inner-column>
			<header>
				<logo-icon>
					LOGO
				</logo-icon>
				<user-profile>
					Welcome, <a href="#"> Steve</a>
				</user-profile>
			</header>
		</inner-column>
	</section>

	<section>
		<inner-column>
			<h1 class="${parks[4].id}">${parks[4].name}</h1>
		</inner-column>
	</section>

	<section class="dates">
		<inner-column>
			<h2>February</h2>
			<ul class="calendar">
				<li class="a1" data-date="a1"></li>
				<li class="b1"></li>
				<li class="c1"></li>
				<li class="d1">1</li>
				<li class="e1">2</li>
				<li class="f1">3</li>
				<li class="g1">4</li>
				<li class="a2">5</li>
				<li class="b2">6</li>
				<li class="c2">7</li>
				<li class="d2">8</li>
				<li class="e2">9</li>
				<li class="f2">10</li>
				<li class="g2">11</li>
				<li class="a3">12</li>
				<li class="b3">13</li>
				<li class="c3">14</li>
				<li class="d3">15</li>
				<li class="e3">16</li>
				<li class="f3">17</li>
				<li class="g3">18</li>
				<li class="a4">19</li>
				<li class="b4">20</li>
				<li class="c4">21</li>
				<li class="d4">22</li>
				<li class="e4">23</li>
				<li class="f4">24</li>
				<li class="g4">25</li>
				<li class="a5">26</li>
				<li class="b5">27</li>
				<li class="c5">28</li>
				<li class="d5"></li>
				<li class="e5"></li>
				<li class="f5"></li>
				<li class="g5"></li>
			</ul>
		</inner-column>
	</section>

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

window.addEventListener('click', function(event) {

	if(event.target.matches("[data-date]")) {
		showDate(event.target.dataset.date);
	}
})

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

