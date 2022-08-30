

var drinks = [
	"Pepsi", 
	"Coke", 
	"Dr.Pepper", 
	"Fanta", 
	"Water", 
	"Sprite",
	"Beer",
];


drinks.forEach( function(a,b) {
	var number = b + 1;
	console.log(b, a);
});

// the function inside of forEach can be replaced
// take out the function
// give it a name and then just put the name where function would go.

// example...

function print(a,b) {
	var number = b + 1;
	console.log(b, a);
}

drinks.forEach( print);



var myCars = [
	{
		make: "GMC",
		model: "Sierra",
		type: "truck",
	},
	{
		make: "Subaru",
		model: "Outback",
		type: "crossover",
	},
	{
		make: "Ford",
		model: "Bronco",
		type: "truck",
	},
	{
		make: "Chevy",
		model: "Silverado",
		type: "truck",
	},
	{
		make: "Jeep",
		model: "Wrangler",
		type: "truck",
	},
	{
		make: "Toyota",
		model: "Tundra",
		type: "truck",
	},
	{
		make: "Dodge",
		model: "Challenger",
		type: "sports-car",
	},
	{
		make: "Porsche",
		model: "911",
		type: "sports-car",
	},
];

myCars.forEach( function(a){
	console.log(a);
});


// Adding the "make" after the a, it gets the list inside of the object for that specific part which in this case is the make of the car.
myCars.forEach( function(a){
	console.log(a.make);
});

myCars.forEach( function(a){
	console.log(a.model);
});

// You can combine what it shoots out in one forEach like so...
myCars.forEach( function(a){
	console.log("Make:", a.make);
	console.log("Model:", a.model);
	console.log("");
});

// What if you only want to get certain things from the the list...

myCars.forEach( function(a) {
	//if the a is a truck
	if(a.type == "truck") {
		//put in a list
		console.log("Make:", a.make);
		console.log("Model:", a.model);
		console.log("");
	}
});

myCars.forEach( function(a) {
	//if the a is a sports-car
	if(a.type == "sports-car") {
		//put in a list
		console.log("Make:", a.make);
		console.log("Model:", a.model);
		console.log("");
	}
});

myCars.forEach( function(a) {
	//if the a is not a truck or sports-car
	if(a.type != "sports-car" && a.type != "truck") {
		//put in a list
		console.log("Make:", a.make);
		console.log("Model:", a.model);
		console.log("");
	}
});

// FILTER

var truck = myCars.filter( function(a) {
	return a.type == "truck";
});

console.log(truck); // got a new array with only trucks

// create function - that accepts an array... and generates markup
// must have heading --- and create a list of the items....

function listbuilder(items, heading) {
	var h2 = document.createElement('h2');
	h2.textContent = heading;
	document.body.appendChild(h2);

	var ol = document.createElement('ol');

	items.forEach( function (a) {
		var li = document.createElement('li');
		li.textContent = a.make;
		ol.appendChild(li);
	});

	document.body.appendChild(ol);
}

listbuilder(truck, "Trucks Steve wants to buy.");

//Array.from(myCars);
console.log(Array.from(truck));












