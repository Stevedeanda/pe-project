
// Need to do this at some point......do down to see where I left off...


class TodoClass {

	constructor() {
		this.checklist = [];
		this.idMaker = 0;
	}

	add(item) {
		const pack = {
			id: `b-00${this.idMaker++}`,
			item: item,
		}
		this.checklist = [...this.checklist, pack];
	}

	listTodos(checklist) {
		this.checklist.forEach( function(pack) {
			console.log(pack);
		});
	}

}

var todoClass = new TodoClass()

todoClass.add("Is this working");
todoClass.listTodos();
todoClass.add("Looks like it is");
todoClass.listTodos();
todoClass.add("Noooice");
todoClass.listTodos();





// Copying Derek first
// Here I need to create an app using everything we learn this week. Go for it and see what you can do....

class Todo {

	constructor(id, content) {
		this.id = id;
		this.content = content;
		this.dateCreated = new Date();
		this.complete = false;
	}

	toggleComplete() {
		this.complete = !this.complete;
	}

	get isComplete() {
		// if (this.complete) {
		// 	return "complete"
		// } {
		// 	return "";
		// }
		// writing it in turnary
		return (this.complete) ? "complete" : "";
	}

	render() {
		const { id, content, isComplete} = this;

		return `
			<todo-card class='${isComplete}'data-id='${id}'>
				<h2>${content}</h2>

				<actions>
					<button>Complete</button>
				</actions>
			</todo-card>
		`;
	}
}

class TodoApp {

	constructor(name) {
		this.name = name;
		this.todos = [];
		this.count = 0;

		this.$form = document.querySelector('form');
		this.$input = this.$form.querySelector('input');
		this.$outlet = document.querySelector('output');

		this.addEventListeners();
	}

	print(note = "") {
		console.log(`${this.name.toUpperCase()}-------${note}`);
	}

	add(content) {
		todo = new Todo(this.count++, content);
		this.todos = [...this.todos, todo];
		this.print(`Added ${content}`);
	}

	findById(id) {

	}

	remove(index) {
		var removed = this.todos[index].content;
		this.todos.splice(index,1);
		this.print(`Removed ${removed}`);
	}

	complete(index) {
		this.todos[index].complete = true;
		this.print(`Completed ${this.todos[index].content}`);
	}

	renderList() {

	}

	addEventListeners() {
		// do that
	}
}

var todo = new TodoApp("Tonight");
todo.add("Taytay comes to Houston");
todo.add("The worlds strongest man");
todo.add("The war on comfort");
todo.remove(2);
todo.complete(1);

var otherTodo = new TodoApp("Tomorrow");
otherTodo.add("First hispanic President");
otherTodo.add("Avengers 10 or Avenger X??");












