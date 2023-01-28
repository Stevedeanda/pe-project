
// Gather infomation and set things up
var babyBag = [];
var itemId = 0;

const $form = document.querySelector("form");
const $input = $form.querySelector("input");
const $output = document.querySelector("output");



// Write the logic for the app
function add(item) {
	const babyItem = {
		id: `b-00${itemId++}`,
		item,
		packed: false,
	};

	babyBag = [...babyBag, babyItem];
	renderBag(babyBag);
}

function remove(id) {
	const filtered = babyBag.filter( function(item) {
		return item.id != id;
	});

	babyBag = [...filtered];
	renderBag(babyBag);

}

function packed(id) {
	for (let i = 0; i < babyBag.length; i++) {
		if ( babyBag[i].id == id ) {
			babyBag[i].packed = true;
		}
	}
	renderBag(babyBag);
}





// Keeping the rendering separate
function renderBabyItems(items) {
	return `
		<li data-oh='${items.id}'>
			<baby-list class='${items.packed ? "packed" : ""}'>
				<h2>${items.item}</h2>

				<actions>
					<button>remove</button>
					<button>packed</button>
				</actions>
			</baby-list>
		</li>
	`;
}

function renderBag(bag) {
	var template = "<ul>";
	bag.forEach( function(items) {
		template += renderBabyItems(items);
	});
	template += "</ul>";
	$output.innerHTML = template;

}




// Setup event listeners
$form.addEventListener('submit', function (event) {
	event.preventDefault();

	add( $input.value);
	$input.value = "";
	console.log('Baby Bag: ', babyBag);
});





$output.addEventListener('click', function(event) {

	if (event.target.textContent == 'remove') {
		const id = event.target.closest('li').dataset.oh;
		remove(id);
	}

	if (event.target.textContent == 'packed') {
		const id = event.target.closest('li').dataset.oh;
		packed(id);
	}
});


