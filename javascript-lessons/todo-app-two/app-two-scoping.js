
// Here we are putting all the functions from app-two.js inside an object. 
// Then see how scope works to print them out into the console.

const todoApp = {

	todos: [],
	idMaker: 0,

	print: function(note = "") {
		console.log(`----- ${note}`);
		console.log('todos: ', this.todos);
		//debugger;//acts as a breakpoint in the dev tools in the watch.
	},
	// within an object like we are in at the moment. todos inside the funcion like the one above. It needs to be scoped to the todoApp.todo, instead of using todoApp, you can write it this.todo. It knows that you are refering to todoApp. this = todoApp.

	add: function(content) {
		const todo = {
			id: `a${this.idMaker++}`,
			content: content,
		}
		// this.todos.push(todo);
		// This top function 'push' is actively changing the todos, this new method, is making a brand new array and assign it fresh. like so
		this.todos = [...this.todos, todo];
		// This new way adds the todo to the end of the array. It also points the todoApp to a new array with the added todo. 
		this.print(`Added: ${content}`);
	},
	// You also have to use 'this' on the function so it is scoped to it. 

	remove: function(id) {
		var todo = {};
		this.print(`Removed: ${this.todos[id].content}`)
		this.todos.splice(id, 1);// classic method they use in tutorials. Id is the start of the index and the 1 is how many to remove.
		// delete todos[id];
	},

	complete: function(id) {
		this.todos[id].complete = true;
		this.print(`Completed: ${this.todos[id].content}`);
	},

	update: function(id, content) {
		this.todos.splice(id, 1);
		add(content);
		this.print(`Updated: ${content}`);
	},

};

console.log( todoApp.print("Hello"));

todoApp.add("Brush your teeth!!");

todoApp.add("Eat breakfast");

todoApp.add("DO WORK");

todoApp.complete(0);

todoApp.remove(0);



const babyApp = {

	checklist: [],
	idMaker: 0,

	display: function(note = "") {
		console.log(`-----${note}`);
		console.log("Baby Items: ", this.checklist);
	},

	add: function(item) {
		const pack = {
			id: `b${this.idMaker++}`,
			item: item,
		}
		this.checklist = [...this.checklist, pack];
		this.display(`Need to pack ${item}`);
	},

	remove: function(id) {
		this.display(`Don't need ${this.checklist[id].item}`);
		this.checklist.splice(id, 1);
	},

	update: function(id, newItem) {
		this.display(`Updating: ${this.checklist[id].item}...`);
		this.checklist.splice(id, 1);
		this.add(newItem);
	},

	packed: function(id) {
		this.checklist[id].packed = true; // don't quite understand how this works
		this.display(`Packed ${this.checklist[id].item}`);
	}
};

console.log(babyApp.display('Eh'));
babyApp.add("Milk bottle");
babyApp.add("Toys");
babyApp.add("Swaddle");
babyApp.add("Socks");

babyApp.remove(0);

babyApp.update(1, "Blankie");

babyApp.packed(0);
babyApp.packed(1);





















// Here we are putting all the functions from app-two.js inside a function. It is called constructor functions. Constructor will create objects.
// Then see how scope works to print them out into the console.


function Monster(name, age) {

	// var this = {}; this is the empty array, that is why we put this.name so that it puts it into the array. You set all the properties on this.

	this.name = name,
	this.age = age,

	this.roar = function () {
		alert(`${this.name}!!!!!`)
	}
}


const chunky = new Monster("Chunky", 15);

const munchy = new Monster("Munchy", 45);
//chunky.roar();

console.log(munchy.name);

// Lets say we want to add something to the object, so far we have name and age. Lets add a greeting to it, we will call it whisper. The way to do that is as follows

Monster.prototype.whisper = function() {
	console.log(`... hi name is ${this.name}`)
};

// We test to see if this is added to the other monsters
chunky.whisper();


// Me trying the constructor function 

function BabyBag() {

	this.checklist = [];
	this.idMaker = 0,

	this.display = function(note = "") {
		console.log(`-----${note}`);
		console.log("Baby Items: ", this.checklist);
	},

	this.add = function(item) {
		const pack = {
			id: `b-00${this.idMaker++}`,
			item: item,
		}
		this.checklist = [...this.checklist, pack];
		this.display(`Need to pack ${item}`);
	}

	this.remove = function(id) {
		this.display(`Don't need ${this.checklist[id].item}`);
		this.checklist.splice(id, 1);
	},

	this.update = function(id, newItem) {
		this.display(`Updating: ${this.checklist[id].item}...`);
		this.checklist.splice(id, 1);
		this.add(newItem);
	}

	// this.packed = function(id) {
	// 	this.checklist[id].packed = true; 
	// 	this.display(`Packed ${this.checklist[id].item}`);
	// }

}


const Packing = new BabyBag();

Packing.add("Toys");
Packing.add("Milk bottles");
Packing.add("Swaddle");
Packing.add("Sweater");
Packing.add("Wipes");

Packing.remove(0);

Packing.update(1, "Blankie");

BabyBag.prototype.packed = function(id) {
	this.checklist[id].packed = true;
	this.display(`Packed ${this.checklist[id].item}`);
}

// We test to see if this is added to the other monsters
Packing.packed(2);
Packing.packed(1);






