<script setup>

	import { ref, computed, watch} from 'vue';
	

	// Paint Calculator
	const length = ref("");
	const width = ref("");
	const rate = 350;
	
	const sf = computed( function () {
		return (length.value * width.value);
	});
	
	const gallons = computed( function() {
		return (sf.value / rate);
	});
	
	const message = computed( function () {
		return `You will need to purchase ${Math.ceil(gallons.value)} gallons of paint to cover ${sf.value} square feet.`;
	});	
	
	const out = ref('');
	
	function displayMessage() {
		out.value = message;
	}
	
	watch(length, function(newName, oldName) {
		if (newName !== oldName) {
			out.value = "";
		}
	});
	
	watch(width, function(newName, oldName) {
		if (newName !== oldName) {
			out.value = "";
		}
	});


	// Pizza Party
	const people = ref(8);
	const pizzas = ref(2);
	const slicesPerPizza = 8;
	
	const totalSlices = computed( function () {
		return (pizzas.value * slicesPerPizza)
	});
	
	const numberOfSlices = computed( function () {
		return (totalSlices.value / people.value)
	});
	
	const leftOverSlices = computed( function() {
		return (totalSlices.value % people.value)		  
	});


	// Area of Rectangular Rooms
	const lengthTwo = ref(15);
	const widthTwo = ref(20);
	const conversion = 0.09290304;
	
	const area = computed( function () {
		return (lengthTwo.value * widthTwo.value)
	});
	
	const meters = computed( function () {
		return (area.value * conversion)
	});


	// Retirement Calculator	
	const currentAge = ref(33);
	const retireAge = ref(65);
	const currentYear = 2023;
	
	const years = computed( function () {
		return (retireAge.value - currentAge.value)
	});
	
	const retireYear = computed( function () {
		return (currentYear + years.value)
	});


	// Simple Math
	const first = ref(10);
	const second = ref(5);
	
	const add = computed( function () {
		return (first.value + second.value)
	});
	
	const minus = computed( function () {
		return (first.value - second.value)
	});
	
	const product = computed( function () {
		return (first.value * second.value)
	});
	
	const division = computed( function () {
		return (first.value / second.value)
	});


	// Self-Checkout
	const priceOne = ref("");
	const itemOne = ref("");
	const priceTwo = ref("");
	const itemTwo = ref("");
	const priceThree = ref("");
	const itemThree = ref("");
	const rateTwo = .055;
	
	const totalOne = computed( function () {
		return (priceOne.value * itemOne.value);
	});
	
	const totalTwo = computed( function () {
		return (priceTwo.value * itemTwo.value);
	});
	
	const totalThree = computed( function () {
		return (priceThree.value * itemThree.value);
	});
	
	const subTotal = computed( function() {
		return (totalOne.value + totalTwo.value + totalThree.value);
	});
	
	const taxes = computed( function() {
		return (subTotal.value * rateTwo);
	});
	
	const total = computed( function() {
		return (taxes.value + subTotal.value);
	});
	
	const messageTwo = computed( function () {
		return `Subtotal: $${Math.round(subTotal.value * 100) / 100}  Tax: $${Math.round(taxes.value * 100) / 100}
		Total: $${Math.round(total.value * 100) / 100}`;
	});	
	
	const outTwo = ref('');
	
	function checkout() {
		outTwo.value = messageTwo;
	}
	
	watch(priceOne && priceTwo && priceThree, function(newPrice, oldPrice) {
		if (newPrice !== oldPrice) {
			outTwo.value = "";
		}
	});
	
	watch(itemOne && itemTwo && itemThree, function(newItem, oldItem) {
		if (newItem !== oldItem) {
			outTwo.value = "";
		}
	});


	// Mad lib
	const noun = ref('dog');
	const verb = ref('walk');
	const adjective = ref('blue');
	const adverb = ref('quickly');


	// Printing Quotes
	const quote = ref('I am your father!');
	const author = ref('Darth Vader');


	// Character Counting
	var string = ref('Steve');


	// Saying Hello
	const name = ref("");
	
	const messageThree = computed( function() {
		return `Hello, ${name.value}, nice to meet you.`;
	});
	
	const outputThree = ref("");
	
	function createMessage() {
		outputThree.value = messageThree;
	}
	
	watch(name, function(newName, oldName) {
		if (newName !== oldName) {
			outputThree.value = "";
		}
	});
	
	

</script>

<template>

	<form @submit.prevent="createMessage()" autocomplete='off'>
		<h2>Saying Hello</h2>
		<field class='form-field'>
			<label for='a'>What is your name?</label>
			<input id='a' type='text' v-model="name"/>
		</field>

		<button type='submit'>Submit</button>
		
		<output v-if="outputThree">{{messageThree}}</output>
	</form>


	<form>
		<h2>Counting number of characters</h2>
		<field>
			<label for='a'>Type anything you want in here?</label>
			<input id='a' type="text" v-model='string'/>
		</field>
		
		<output>
			<span>{{string}}</span> has <span>{{string.length}}</span> characters.
		</output>
	</form>


	<form>
		<h2>Printing Quotes</h2>
		
		<field>
			<label for='a'>What is the quote?</label>
			<input id='a' type="text" v-model='quote'/>
		</field>
		
		<field>
			<label for='b'>Who said the quote?</label>
			<input id='b' type="text" v-model='author'/>
		</field>
		
		<output>
			<span>{{author}}</span> said, <span>"{{quote}}"</span>.
		</output>
	</form>


	<form>
		<h2>Mad Lib</h2>
		
		<field>
			<label for='a'>Enter a noun:</label>
			<input id='a' type="text" v-model='noun'/>
		</field>
		
		<field>
			<label for='b'>Enter a verb:</label>
			<input id='b' type="text" v-model='verb'/>
		</field>
		
		<field>
			<label for='c'>Enter an adjective:</label>
			<input id='c' type="text" v-model='adjective'/>
		</field>
		
		<field>
			<label for='d'>Enter an adverb:</label>
			<input id='d' type="text" v-model='adverb'/>
		</field>
		
		<output>
			Do you <span>{{verb}}</span> your <span>{{adjective}}</span> <span>{{noun}}</span> <span>{{adverb}}</span>? That's hilarious.
		</output>
	</form>


	<form>
		<h2>Simple Math</h2>
		
		<field>
			<label for='a'>Enter first number</label>
			<input id='a' type="number" v-model='first'/>
		</field>
		
		<field>
			<label for='b'>Enter second number</label>
			<input id='b' type="number" v-model='second'/>
		</field>

		
		<output>
			{{first}} + {{second}} = <span>{{add}}</span> <br>
			{{first}} - {{second}} = <span>{{minus}}</span> <br>
			{{first}} * {{second}} = <span>{{product}}</span> <br>
			{{first}} / {{second}} = <span>{{division}}</span> 
		</output>
	</form>


	<form @submit.prevent='displayMessage()' autocomplete='off'>
		<h2>Paint Calculator</h2>
		
		<field>
			<label for='a'>What is the length in feet?</label>
			<input id='a' type="number" min=0 v-model='length' placeholder='20'/>
		</field>
		
		<field>
			<label for='b'>What is the width in feet?</label>
			<input id='b' type="number" min=0 v-model='width' placeholder='30'/>
		</field>
		
		<button type='submit'>Enter</button>
		
		<output v-if='out'>{{message}}</output>
		
	</form>


	<form>
		<h2>Pizza Party</h2>
		
		<field>
			<label for='c'>How many people eating pizza?</label>
			<input id='c' type="number" min=0 v-model='people'/>
		</field>
		
		<field>
			<label for='d'>How many pizzas do we have?</label>
			<input id='d' type="number" min=0 v-model='pizzas'/>
		</field>

		
		<output>
			We have <span>{{people}}</span> people with <span>{{pizzas}}</span> pizza boxes. <br>
			Each person gets <span>{{Math.round(numberOfSlices)}}</span> slices of pizza.<br>
			There are <span>{{leftOverSlices}}</span> lefover slices.
		</output>	
	</form>


	<form>
		<h2>Area of a Rectangular Room</h2>
		
		<field>
			<label for='e'>What is the length of the room in feet?</label>
			<input id='e' type="number" min=0 v-model='lengthTwo'/>
		</field>
		
		<field>
			<label for='f'>What is the width of the room in feet?</label>
			<input id='f' type="number" min=0 v-model='widthTwo'/>
		</field>

		
		<output>
			You entered <span>{{lengthTwo}}</span> feet by <span>{{widthTwo}}</span> feet. The area is <span>{{Math.round(area * 100) / 100}}</span> square feet. If your interested it is <span>{{Math.round(meters * 1000) / 1000}}</span> square meters
		</output>
	</form>


	<form>
		<h2>Retirement Calculator</h2>
		
		<field>
			<label for='g'>What is your current age?</label>
			<input id='g' type="number" v-model='currentAge'/>
		</field>
		
		<field>
			<label for='h'>At what age would you like to retire?</label>
			<input id='h' type="number" v-model='retireAge'/>
		</field>

		
		<output>
			You have <span>{{years}}</span> years left until you can retire. It's <span>{{currentYear}}</span>, so you can retire in <span>{{retireYear}}</span>.
		</output>
	</form>


	<form @submit.prevent='checkout()' autocomplete='off'>
		<h2>Self-Checkout</h2>
		
		<field>
			<label for='i'>Enter Price of first item:</label>
			<input id='i' type='number' step='0.01' v-model='priceOne'>
		</field>
		
		<field>
			<label for='j'>Enter Quantity of first item:</label>
			<input id='j' type='number' v-model='itemOne'>
		</field>
		
		<field>
			<label for='k'>Enter Price of second item:</label>
			<input id='k' type='number' step='0.01' v-model='priceTwo'>
		</field>
		
		<field>
			<label for='l'>Enter Quantity of second item:</label>
			<input id='l' type='number' v-model='itemTwo'>
		</field>
		
		<field>
			<label for='m'>Enter Price of third item:</label>
			<input id='m' type='number' step='0.01' v-model='priceThree'>
		</field>
		
		<field>
			<label for='n'>Enter Quantity of third item:</label>
			<input id='n' type='number' v-model='itemThree'>
		</field>
		
		<button type='submit'>Total</button>
		
		<output v-if="outTwo">{{messageTwo}}</output>	
	</form>

</template>

<style>
	* {
		box-sizing: border-box;
	}

	body {
		min-height: 100vh;
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
  		grid-template-rows: auto;
  		grid-auto-flow: column dense;
 	 	column-gap: 10px;
  		row-gap: 15px;
		font-size: 1.4rem;
		padding: 20px;
	}

	div {
		display: grid;
		grid-column-start: 2;
	   grid-column-end: 3;
	}
	form {
		display: grid;
		gap: 20px;
		padding: 20px;
		border-left: 1px solid black;
		border-bottom: 3px solid black;
	}
	field, .form-field  {
		display: grid;
	}
	label {
		font-size: 1.1rem;
	}
	span {
		color: peru;
	}
</style>