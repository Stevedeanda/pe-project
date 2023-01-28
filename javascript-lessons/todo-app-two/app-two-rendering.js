
// Gathering information, setting things up
var todos = [];
var lastId = 0;

const $form = document.querySelector("form");
const $input = $form.querySelector("input");
const $output = document.querySelector("output");




// Writing the actual logic for the app
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
	const filtered = todos.filter( function(todo) {
		return todo.id != id;
	});

	todos = [...filtered];
	renderTodos(todos);
}

function complete(id) {
	for (let i = 0; i < todos.length; i++) {
		if ( todos[i].id == id ) {
			todos[i].complete = true;
		}
	}
	renderTodos(todos);
}





// Keeping the rendering separate
function renderTodo(todo) {
	return `
		<li data-uh='${todo.id}'>
			<todo-card class='${todo.complete ?  "complete" : ""}'>
				<h2>${todo.content}</h2>

				<actions>
					<button>remove</button>
					<button>complete</button>
				</actions>
			</todo-card>
		</li>
	`;
}

function renderTodos(todos) {
	var template = "<ul>";
	todos.forEach( function(todo) {
		template += renderTodo(todo);
	});
	template += "</ul>";
	$output.innerHTML = template;
}

add("Do the dishes");





// Setting up the event listener so the buttons work and will use the logic
$form.addEventListener('submit', function(event) {
	event.preventDefault();

	add( $input.value);
	$input.value = "";
	console.log('todos: ', todos);
});


// We are going to listen for the click that happens in the button called removed

// instead of $form like the top one, we are listening to the output
// instead of submit, we are listening for a click
// since it is not a form, no need for the preventDefault
$output.addEventListener('click', function(event) {

	console.log(event.target);

	if (event.target.textContent == 'remove') {
		const id = event.target.closest('li').dataset.uh;
		remove(id);
	}

	if (event.target.textContent == 'complete') {
		const id = event.target.closest('li').dataset.uh;
		complete(id);
	}

});

















