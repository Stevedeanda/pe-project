
// set, get, reset, and clear
/*
localStorage.setItem('key','value');

const data = localStorage;

data.setItem('myName', 'Steve');

var get = data.getItem('myName');

console.log(get);

data.setItem('myName', 'DeAnda');

var get = data.getItem('myName');

console.log(get);

data.clear();


data.setItem('restaurant', 'Pluckers');

var get = data.getItem('restaurant');

console.log(get);

data.setItem('restaurant', 'Wendys')

var get = data.getItem('restaurant');

console.log(get);

data.clear();


data.setItem('creditcard', 'visa');

var get = data.getItem('creditcard');

console.log(get);

data.setItem('creditcard', 'discover');

var get = data.getItem('creditcard');

console.log(get);

data.clear();


localStorage.setItem('baby', 'Mia');

localStorage.getItem('baby');

console.log(localStorage.getItem('baby'));

localStorage.clear();


data.setItem('bike', 'Specialized');

var bike = data.getItem('bike');

console.log(bike);

data.clear();


data.setItem('apple','iphone');

var get = data.getItem('apple');

console.log(get);

data.clear();


data.setItem('stuff', 'Shoes');

var get = data.getItem('stuff');

console.log(get);

data.clear();


localStorage.setItem('message', 'Well well well');

console.log(localStorage.getItem('message'));

data.clear();


data.setItem('song', 'Coming in Hot');

console.log(data.getItem('song'));

data.clear();


//stringify and parse

var count = 0;

count++;

data.setItem('score', JSON.stringify({score: count}));

const storedCount = data.getItem('score');

console.log(storedCount);

console.log(storedCount.score); // won't work, needs to be decoded back to object

console.log(JSON.parse(storedCount));

console.log(JSON.parse(storedCount).score);

data.clear();



const data = localStorage;

var yearsOld = 32;

data.setItem('age', JSON.stringify({age: yearsOld}));

const wrinkles = data.getItem('age');

console.log(wrinkles);

console.log(JSON.parse(wrinkles));

console.log(JSON.parse(wrinkles).age);

data.clear();


var planet = 'Earth';

data.setItem('planets', JSON.stringify({planeta: planet}));

const solar = data.getItem('planets');

console.log(solar);

console.log(JSON.parse(solar));

console.log(JSON.parse(solar).planeta);

data.clear();




data.setItem('kitchen', JSON.stringify({plates: 50}));

const gold = data.getItem('kitchen');

console.log(gold);

console.log(JSON.parse(gold));

console.log(JSON.parse(gold).plates);

data.clear();
*/


// build a library

movies = undefined;

function initialize() {
	// check to see if the data is in local storage yet,
	if (localStorage.getItem("movies")) {
		//if it is set it to movies, 
		movies = localStorage.getItem("movies");
	} else { //else then set up a default data. 
		movies = {
			genres: [],
		};
	} 
	saveData()
}

initialize();


function saveData() {
	// make data into string
	var string = JSON.stringify(movies);
	//save it localStorage
	localStorage.setItem("movies", string);
}



function getData() {
	// get data from localStorage
	var string = localStorage.getItem("movies");
	// decode it back to object
	var json = JSON.parse(string);
	// return
	return json;
}


// THIS IS NOT WORKING!!!!
function addGenre(genreName) {
	//add genre into genres into movies
	movies.genres.push(genreName);
	// now save it
	saveData();
}

//addGenre('horror');


// function set(key,value) {

// 	const data = localStorage;
// 	data.setItem(key, value);
// 	var get = data.getItem(`${key}`);
// 	console.log(get);
// }


// set("stuff","shoes");
// set("well", 'yeah');

// function string(key,value) {
// 	const data = localStorage;
// 	data.setItem(`${key}`,JSON.stringify({stuff: `${value}`}));
// 	const random = data.getItem(`${key}`);
// 	console.log(JSON.parse(random).stuff);
// }

// string("yes", 50);

























































