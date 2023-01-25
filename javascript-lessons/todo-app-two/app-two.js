

const todos = [];
var idMaker = 0;

function print (note = "") {
	console.log(`----- ${note}`);
	console.log('todos: ', todos);
}

function add(content) {
	const todo = {
		id: `a${idMaker++}`,
		content: content,
	}
	todos.push(todo);
	print(`Added: ${content}`);
}

function remove(id) {
	var todo = {};
	print(`Removed: ${todos[id].content}`)
	todos.splice(id, 1);// classic method they use in tutorials. Id is the start of the index and the 1 is how many to remove.
	// delete todos[id];
}

function complete(id) {
	todos[id].complete = true;
	print(`Completed: ${todos[id].content}`);
}

function update(id, content) {
	todos.splice(id, 1);
	add(content);
	print(`Updated: ${content}`);
}

add("go to the store");
add("prepare dinner");

complete(0);

add("watch video");

update(1, "already watched video");

remove(1);

add("go to sleep");

const babyChecklist = [];
var babyId = 0;

function display(note = "") {
	console.log(`----- ${note}`);
	console.log("Baby Items: ", babyChecklist);
}

function addItem(item) {
	const pack = {
		id: `b${babyId++}`,
		item: item,
	}
	babyChecklist.push(pack);
	display(`Need to pack ${item}`);
}

function removeItem(id) {
	display(`Don't need ${babyChecklist[id].item}`);
	babyChecklist.splice(id, 1);
}

function packedItem(id) {
	babyChecklist[id].packedItem = true;
	display(`Packed ${babyChecklist[id].item}`);
}

addItem("Milk bottle");
addItem("Diapers");
addItem("Wipes");
addItem("Socks");
addItem("Yogurt")

removeItem(3);

packedItem(0);
packedItem(1);









// todo list WITH id

// Having a hard time understanding this method, ask Derek for help on this.

let todoList = [];
var idCount = 0;

function createTodo(content) {
	const todoTwo = {
		id:"abc5-" + idCount++,
		text: content,
		complete: false,
	};
	todoList.push(todoTwo);
	console.log(todoList);
}

function findById(idToFind) {
	return todoList.find( function(currentTodo) {
		return currentTodo.id === idToFind;
	});

}



function deleteTodo(idToDelete) {
	// look at each todo
	var theNewArray = todoList.filter( function(currentTodo) {
		// and if it doesn't match - add to a new array
		return currentTodo.id !== idToDelete;
	});
	todoList = theNewArray;
}

function updateTodo(idToUpdate, theNewText) {
	const found = todoList.find( function(todoTwo) {
		return todoTwo.id === idToUpdate;
	});
	if (found) {
		found.text = theNewText;
	} else {
		console.log(idToUpdate + " not found");
	}
}

function completeTheTodo(idToComplete) {
	const found = findTodoById(idToComplete);
	if (found) {
		found.complete = true;
	} else {
		console.log(idToComplete + " not found");
	}
}

console.log(todoList);
createTodo("Go over video");
createTodo("Practice coding");
createTodo("Talk to Derek");

console.log('foundById: ', findById('abc5-2') );
console.log('foundById: ', findById('abc5-0') );
console.log('foundById: ', findById('abc5-1') );




