
console.log('hello');

function print(note = "") {
	console.log(`--- ${note}`)
	console.log('todo list: ', todos);
}

const todos = [];
var count = 0;

// This function was the first one that we did for adding to the array

// function add(todo) {
// 	todos.push(todo);
// 	print();
// }

function add(content) {
	const todo = {
		id: `a${count++}`,
		content: content,
	};
	todos.push(todo);
	print(`added ${content}`);
}

function remove(id) {
	print(`removed ${todos[id].content}`)
	todos.splice(id, 1);
}

function complete(id) {
	todos[id].complete = true;
	print(`completed ${todos[id].content}`)
}

function update(id, content) {
	todos.splice(id, 1);
	add(content);
	print(`updated ${content}`);
}

add("Go to store");
add("Put baby to sleep");
add("Follow along to video");
add("Feed baby");

complete(3);

add("Eat dinner");

update(4, "Dinner date with wife");

remove(1);

var_dump(todos);

