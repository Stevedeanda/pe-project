
var todos = [];
var lastId = 0;

//Here the $form is an element and we are searching for it 
//and only searching for the form
const $form = document.querySelector('form');
//Here we are looking for the input in the form
const $input = $form.querySelector('input');
//Need to get the output where the rendering will go in the html
const $output = document.querySelector('output');

function add(content) {
	const todo = {
		id: `a-${lastId++}`,
		content,
		complete: false,
	};

	todos = [...todos, todo];
	renderTodos(todos);
}

function remove(id) {
	const filtered = todos.filter ( function(todo) {
		return todo.id != id;
	});
	todos = [...filtered];
	renderTodos(todos);
}

function complete(id) {
	for (let i = 0; i < todos.lenth; i++) {
		if (todos[i].id == id) {
			todos[i].complete = true;
		}
	}
	renderTodos(todos);	
}

function renderTodo(todo) {
	return `
	<li data-id='${todo.id}'>
		<todo-card class='${todo.complete ? 'complete' : ''}'>
			<h2>${todo.content}</h2>

			<action>
				<button>remove</button>
				<button>complete</button>
			</action>
		</todo-card>
	</li>
	`
}

function renderTodos(todos) {
	var template = "<ul>";
	todos.forEach ( function(todo) {
		template += renderTodo(todo);
	});
	template += "</ul>";
	$output.innerHTML = template;
}


//This event listener looks for all clicks/submits 
$form.addEventListener('submit', function(event) {
	//This takes away the default setting of the form when hit submit
	event.preventDefault();

	add($input.value);
	$input.value = '';
	console.log('todos: ', todos);
})


$output.addEventListener('click', function(event) {

	if (event.target.textContent == 'remove') {
		const id = event.target.closest('li').dataset.id;
		remove(id);
	}
	if (event.target.textContent == 'complete') {
		const id = event.target.closest('li').dataset.id;
		complete(id);
	}
})












